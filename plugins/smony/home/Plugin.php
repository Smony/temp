<?php namespace Smony\Home;

use Backend;
use System\Classes\PluginBase;

/**
 * home Plugin Information File
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
            'name'        => 'home',
            'description' => 'home page...',
            'author'      => 'Smony',
            'icon'        => 'icon-desktop'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Smony\Home\Components\Theme' => 'home',
            'Smony\Home\Components\Coffee' => 'homeCoffee',
            'Smony\Home\Components\Work' => 'work',
            'Smony\Home\Components\Social' => 'social',
            'Smony\Home\Components\Item' => 'item',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'smony.home.some_permission' => [
                'tab' => 'home',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        #return []; // Remove this line to activate

        return [
            'home' => [
                'label'       => 'Home page',
                'url'         => Backend::url('smony/home/theme'),
                'icon'        => 'icon-desktop',
                #'permissions' => ['smony.home.*'],
                'order'       => 500,
                'sideMenu' => [
                    'contact' => [
                        'label'       => 'Contact',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('smony/home/theme'),
                    ],
                    'coffee-items' => [
                        'label'       => 'Coffee items',
                        'icon'        => 'icon-coffee',
                        'url'         => \Backend::url('smony/home/coffee'),
                    ],
                    'how-it-works' => [
                        'label'       => 'How it works',
                        'icon'        => 'icon-files-o',
                        'url'         => \Backend::url('smony/home/work'),
                    ],
                    'social' => [
                        'label'       => 'Social',
                        'icon'        => 'icon-share-alt',
                        'url'         => \Backend::url('smony/home/social'),
                    ],
                    'if-you-items' => [
                        'label'       => 'If you items',
                        'icon'        => 'icon-columns',
                        'url'         => \Backend::url('smony/home/item')
                    ]

                ]
            ]

        ];
    }

}
