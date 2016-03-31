<?php namespace Smony\Commit;

use Backend;
use System\Classes\PluginBase;

/**
 * commit Plugin Information File
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
            'name'        => 'commit',
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
            'Smony\Commit\Components\Commit' => 'commit',
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
            'smony.commit.some_permission' => [
                'tab' => 'commit',
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
            'commit' => [
                'label'       => 'commit',
                'url'         => Backend::url('smony/commit/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['smony.commit.*'],
                'order'       => 500,
            ],
        ];
    }

/*
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Commit Settings',
                'description' => 'Manage commit settings',
                'category'    => 'Commit',
                'icon'        => 'icon-cog',
                'class'       => 'Smony\Commit\Models\Commit',
                'order'       => 500
            ]
        ];

        return [
            'carousels' => [
                'label'       => 'mohsin.carousel::lang.settings.name',
                'url'         => Backend::url('mohsin/carousel/carousels'),
                'description' => 'mohsin.carousel::lang.plugin.description',
                'category'    => SettingsManager::CATEGORY_CMS,
                'icon'        => 'icon-arrows-h',
                'permissions' => ['mohsin.carousel.*'],
                'order'       => 200
            ],
        ];

    }
*/

}
