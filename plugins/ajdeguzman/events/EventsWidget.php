<?php namespace AJDEGUZMAN\Events;
use Backend\Classes\ReportWidgetBase;
use Backend\Facades\BackendAuth;
use \AJDEGUZMAN\Events\Models\Event;


class EventsWidget extends ReportWidgetBase{

   public function render(){
       $events = BackendAuth::getUser()->events;
       return $this->makePartial('events', [ 'events' => $events ]);
   }
    public function defineProperties()
    {
        return [
            'title'     => [
                'title'     => 'Widget title',
                'default'   => 'QUICK NOTE'
            ],
            'showList'  => [
                'title'     => 'Show notes',
                'type'      => 'checkbox'
            ]
        ];
    }
}