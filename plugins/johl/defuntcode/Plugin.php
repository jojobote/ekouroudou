<?php namespace Johl\DefuntCode;

use Backend;
use System\Classes\PluginBase;

/**
 * defuntCode Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Defunt Code',
            'description' => 'No description provided yet...',
            'author'      => 'johl',
            'icon'        => 'icon-address-card-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Johl\DefuntCode\Components\Defunt' => 'myDefunt',
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
            'johl.defuntcode.some_permission' => [
                'tab' => 'defuntCode',
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
            'defuntcode' => [
                'label'       => 'defuntCode',
                'url'         => Backend::url('johl/defuntcode/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['johl.defuntcode.*'],
                'order'       => 500,
            ],
        ];
    }
}
