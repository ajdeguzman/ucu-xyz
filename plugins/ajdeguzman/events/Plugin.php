<?php namespace AJDEGUZMAN\Events;

use Backend\Models\User;
use System\Classes\PluginBase;

/**
 * events Plugin Information File
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
            'name'        => 'Events',
            'description' => 'Simple CRUD for Events',
            'author'      => 'Aljohn De Guzman',
            'icon'        => 'icon-leaf'
        ];
    }
    public function boot()
    {
        User::extend(function($model){
            $model->hasMany['events'] = ['AJDEGUZMAN\Events\Models\Event'];
        });
    }
    public function registerReportWidgets(){
        return [
            'AJDEGUZMAN\Events\EventsWidget' => [
                'label'     => 'Events',
                'context'   => 'dashboard'
            ]
        ];
    }

}
