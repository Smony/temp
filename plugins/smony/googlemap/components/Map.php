<?php namespace Smony\GoogleMap\Components;

use Cms\Classes\ComponentBase;

class Map extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Google Map',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'one' => [
                'title'             => 'one',
                'default'           => 0,
                'type'              => 'string',
            ],
            'two' => [
                'title'             => 'two',
                'default'           => '1',
                'type'              => 'dropdown',
                'options'           => ['1'=>'Roadmap', '2'=>'Satellite', '3'=>'Hybrid', '4'=>'Terrain']
            ],
            'three' => [
                'title'             => 'three',
                'default'           => 'true',
                'type'              => 'checkbox',
            ],


        ];
    }

}