<?php namespace Xeor\YandexWebmaster\Components;

use Cms\Classes\ComponentBase;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class YandexMetrikaInformer extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name'        => 'Metrika Informer',
      'description' => 'Insert your Metrika Informer to any page.'
    ];
  }

  public function onRender()
  {
    // Using settings
    $settings = YandexWebmasterSettings::instance();
    $this->page['metrikainformer'] = $settings->metrika;
  }

}