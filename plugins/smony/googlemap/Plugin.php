<?php namespace Smony\GoogleMap;

use Backend;
use System\Classes\PluginBase;

/**
 * googleMap Plugin Information File
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
            'name'        => 'googleMap',
            'description' => 'No description provided yet...',
            'author'      => 'Smony',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        #return []; // Remove this line to activate

        return [
            'Smony\GoogleMap\Components\Map' => 'googleMap',
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
            'smony.googlemap.some_permission' => [
                'tab' => 'googleMap',
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
        return []; // Remove this line to activate

        return [
            'googlemap' => [
                'label'       => 'googleMap',
                'url'         => Backend::url('smony/googlemap/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['smony.googlemap.*'],
                'order'       => 500,
            ],
        ];
    }

}
