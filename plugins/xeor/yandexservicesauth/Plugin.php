<?php namespace Xeor\YandexServicesAuth;

use Backend;
use System\Classes\PluginBase;

/**
 * YandexServicesAuth Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'xeor.yandexservicesauth::lang.plugin.name',
            'description' => 'xeor.yandexservicesauth::lang.plugin.description',
            'author' => 'Sozonov Alexey',
            'icon' => 'icon-cog'
        ];
    }

    /**
     * Registers settings for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'xeor.yandexservicesauth::lang.settings.menu_label',
                'description' => 'xeor.yandexservicesauth::lang.settings.menu_description',
                'category' => 'Yandex',
                'icon' => 'icon-wrench',
                'url' => Backend::URL('xeor/yandexservicesauth/settings'),
                'order' => 9999
            ]
        ];
    }

}
