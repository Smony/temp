<?php namespace Xeor\YandexWebmaster\Classes;

use Log;
use Xeor\YandexServicesAuth\Classes\YandexServicesAuthApi;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class Api
{

    /**
     * Quantity of popular search phrases.
     */
    const SEARCH_PHRASES_QUANTITY = 12;

    /**
     * Quantity of popular content lines.
     */
    const POPULAR_CONTENT_COUNT = 30;

    /**
     * Converts filter value to date range array.
     *
     * @param string $filter
     *    Date range filter: (day, yesterday, week, month).
     *
     * @return array
     *    Format: array(
     *      'start_date' => 'YYYYMMDD',
     *      'end_date' => 'YYYYMMDD',
     *      'group' => 'week' // [optional]
     *   );
     */
    protected static function filterToDateRange($filter) {
        switch ($filter) {
            case 'day':
                return array(
                    'start_date' => date('Ymd'),
                    'end_date' => date('Ymd'),
                );
            case 'yesterday':
                return array(
                    'start_date' => date('Ymd', time() - 60 * 60 * 24),
                    'end_date' => date('Ymd', time() - 60 * 60 * 24),
                );
            case 'week':
            default:
                return array(
                    'start_date' => date('Ymd', time() - 60 * 60 * 24 * 6),
                    'end_date' => date('Ymd'),
                );
            case 'month':
                return array(
                    'start_date' => date('Ymd', time() - 60 * 60 * 24 * 31),
                    'end_date' => date('Ymd'),
                    //'group' => 'week',
                );
        }
    }

    /**
     * Retrieves analytic information from Yandex.Metrica.
     *
     * @param string $service_uri
     *    Short uri of service.
     * @param array $parameters
     *    Associative array with parameters.
     * @param string $result_type
     *    Result type (json, xml).
     */
    protected static function retreiveData($service_uri, $parameters = array(), $result_type = 'json') {
        $parameters['oauth_token'] = YandexServicesAuthApi::authInfo('token');
        $query_parts = array();
        foreach ($parameters as $key => $value) {
            $query_parts[$key] = $value;
        }
        $query = http_build_query($query_parts);
        $result = @file_get_contents('https://api-metrika.yandex.ru'  . $service_uri . '.' . $result_type . '?' . $query);
        return $result;
    }

    /**
     * Gets counter ID for the current site from Yandex.Metrica.
     */
    public static function getCounterForCurrentSite() {
        $settings = YandexWebmasterSettings::instance();
        $counter_id = $settings->yandex_metrics_reports_counter_id;
        /*if (!is_null($counter_id)) {
            return $counter_id;
        }*/
        $result = self::retreiveData('/counters', array('field' => 'mirrors'));
        if ($result === FALSE) {
            Log::warning('Yandex: Counters request seems to be fail.');
            return FALSE;
        }
        $counters = json_decode($result);
        $current_host = $_SERVER['HTTP_HOST'];
        // Try to decode national domain.
        $decoded_domain = self::idnaDecode($current_host);
        if ($decoded_domain != FALSE && $decoded_domain != $current_host) {
            $current_host = $decoded_domain;
        }
        // Collect all registered domains and their mirrors for all counters.
        $registered_hosts = array();
        foreach ($counters->counters as $counter) {
            // If current host is the main counter host.
            if ($counter->site == $current_host) {
                $settings->yandex_metrics_reports_counter_id = $counter->id;
                $settings->save();
                return $counter->id;
            }
            // If current host is in site mirrors.
            if (isset($counter->mirrors) && in_array($current_host, $counter->mirrors)) {
                $settings->yandex_metrics_reports_counter_id = $counter->id;
                $settings->save();
                return $counter->id;
            }
            // Include counter host and mirrors to the $registered_hosts array
            // in case current host doesn't belong to the counter.
            $registered_hosts[] = $counter->site;
            $registered_hosts = array_merge($registered_hosts, $counter->mirrors);
        }
        Log::warning('The site host does not belong to any Yandex.Metrika counter of the account.');
        return FALSE;
    }

    /**
     * Decode ASCII 'xn--*' domain name to Unicode national domain name.
     */
    protected static function idnaDecode($domain) {
        // Include the class
        require_once __DIR__ . '/idna_convert.class.php';
        // Instantiate it
        $idn = new idna_convert();
        return $idn->decode($domain);
    }

    /**
     * The function generates pie chart with traffic sources summary.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function sourcesChart($counter_id, $filter) {
        $date_range = self::filterToDateRange($filter);
        $parameters = array(
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );
        $results = self::retreiveData('/stat/sources/summary', $parameters);
        $summary = json_decode($results, true);
        if (empty($summary['data'])) {
            return FALSE;
        }
        $return = array();
        $return['sum'] = $sum = $summary['totals']['visits'];
        $i = 1;
        foreach ($summary['data'] as $value) {
            $name = $value['name'];
            $sources_leneged = $i . '. ' . $name . ' (' . round($value['visits'] * 100 / $sum) . '%' . ')';
            $chart[] = array(
                'sources' => $sources_leneged,
                'visits' => (int) $value['visits'],
            );
            $i++;
        }
        $return['chart'] = $chart;
        return $return;
    }

    /**
     * Generates chart with information about page views, visitors and new visitors.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function visitsChart($counter_id, $filter) {
        $date_range = self::filterToDateRange($filter);
        $parameters = array(
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );
        if (isset($date_range['group'])) {
            $parameters['group'] = $date_range['group'];
        }
        $results = self::retreiveData('/stat/traffic/summary', $parameters);
        $visits = json_decode($results, true);
        if (empty($visits['data'])) {
            return FALSE;
        }
        $return = array();

        foreach ($visits['data'] as $value) {
            $timestamp = strtotime($value['date']) * 1000;
            // Views
            $page_views_point = [
                $timestamp,
                (int) $value['page_views']
            ];
            $points['page_views'][$timestamp] = $page_views_point;
            // Visitors
            $visitors_point = [
                $timestamp,
                (int) $value['visitors']
            ];
            $points['visitors'][$timestamp] = $visitors_point;
            // New visitors
            $new_visitors_point = [
                $timestamp,
                (int) $value['new_visitors']
            ];
            $points['new_visitors'][$timestamp] = $new_visitors_point;
        }

        if (count($visits['data']) >= 2) {
            $first_element = reset($visits['data']);
            $last_element = end($visits['data']);

            $startTime = strtotime($first_element['date']) * 1000;
            $endTime = strtotime($last_element['date']) * 1000;

            // Loop between timestamps, 24 hours at a time
            for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 * 1000 ) {
                if (!isset($points['page_views'][$i])) {
                    $points['page_views'][$i] = [
                        $i,
                        0
                    ];
                }
                if (!isset($points['visitors'][$i])) {
                    $points['visitors'][$i] = [
                        $i,
                        0
                    ];
                }
                if (!isset($points['new_visitors'][$i])) {
                    $points['new_visitors'][$i] = [
                        $i,
                        0
                    ];
                }
            }
            // End loop

            // Sort by date
            ksort($points['page_views']);
            ksort($points['visitors']);
            ksort($points['new_visitors']);
        }

        $return['page_views'] = str_replace('"', '', substr(substr(json_encode(array_values($points['page_views'])), 1), 0, -1));
        $return['visitors'] = str_replace('"', '', substr(substr(json_encode(array_values($points['visitors'])), 1), 0, -1));
        $return['new_visitors'] = str_replace('"', '', substr(substr(json_encode(array_values($points['new_visitors'])), 1), 0, -1));
        return $return;
    }

    /**
     * The function generates content of search phrases table ordered by popularity.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     *
     * @return mixed
     *    Content table.
     */
    public static function searchPhrases($counter_id, $filter) {
        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        $results = self::retreiveData('/stat/sources/phrases', $parameters);
        $phrases = json_decode($results, true);

        if (empty($phrases['data'])) {
            return FALSE;
        }

        $phrases_totals_visits = $phrases['totals']['visits'];

        $return = array();

        $i = 1;
        foreach ($phrases['data'] as $value) {
            if ($i > self::SEARCH_PHRASES_QUANTITY) {
                break;
            }
            $percentage = round(100 * $value['visits'] / $phrases_totals_visits, 2) . '%';
            $return[] = array($percentage, $value['phrase']);
            $i++;
        }

        return $return;
    }

    /**
     * The function generates the table of popular content.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function popularContent($counter_id, $filter) {

        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        $results = self::retreiveData('/stat/content/popular', $parameters);
        $content = json_decode($results, true);

        if (empty($content['data'])) {
            return FALSE;
        }

        $return = array();

        $i = 1;
        foreach ($content['data'] as $value) {
            if ($i > self::POPULAR_CONTENT_COUNT) {
                break;
            }
            $page_views = (int) $value['page_views'];
            $return[] = array('<a href="' . $value['url'] . '" target="_blank">' . $value['url'] . '</a>', $page_views);
            $i++;
        }

        return $return;
    }

    /**
     * The function generates pie chart with geographical information on visitors.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function geoChart($counter_id, $filter) {

        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        $results = self::retreiveData('/stat/geo', $parameters);
        $geo = json_decode($results, true);
        if (empty($geo['data'])) {
            return FALSE;
        }

        $return = array();
        $return['sum'] = $total_visits = $geo['totals']['visits'];

        // Exclude unknown visits.
        foreach ($geo['data'] as $key => $value) {
            if ($value['name'] == "Не определено") {
                $total_visits -= $value['visits'];
                unset($geo['data'][$key]);
                break;
            }
        }

        $i = 1;
        $sum_visits = 0;
        foreach ($geo['data'] as $value) {

            $visits = (int) $value['visits'];

            if ($i > 10) {
                $others_visits = $total_visits - $sum_visits;

                $chart[] = array(
                    'country' => e(trans('xeor.yandexwebmaster::lang.widgets.others')),
                    'visits' => $others_visits,
                );

                break;
            }

            $sum_visits += $visits;

            $name = $value['name'];
            $chart[] = array(
                'country' => $name,
                'visits' => $visits,
            );

            $i++;
        }
        $return['chart'] = $chart;
        return $return;
    }

    /**
     * The function generates pie chart with demography information.
     *
     * @param string $counter_id
     *    Counter id.
     * @param string $filter
     *    Date range filter.
     */
    public static function genderChart($counter_id, $filter) {

        $date_range = self::filterToDateRange($filter);

        $parameters = array(
            'id' => $counter_id,
            'date1' => $date_range['start_date'],
            'date2' => $date_range['end_date'],
        );

        $results = self::retreiveData('/stat/demography/structure', $parameters);
        $demography = json_decode($results, true);
        if (empty($demography['data'])) {
            return FALSE;
        }

        $data = $demography['data'];

        $label_counter = 1;
        $sum_visits = 0;
        foreach ($data as $value) {
            if ($value['visits_percent'] === 0) {
                continue;
            }

            $age = $value['name'];
            $name_gender = $value['name_gender'];
            $visits_percent = round($value['visits_percent'] * 100, 2);
            $sum_visits += $visits_percent;
            $gender_legend = $label_counter . '. ' . $name_gender . '/' . $age . '—' . $visits_percent . '%';
            $chart[] = array(
                'gender' => $gender_legend,
                'visits' => $value['visits'],
            );

            $label_counter++;
        }

        $return['sum'] = $sum_visits;
        $return['chart'] = $chart;
        return $return;
    }

}