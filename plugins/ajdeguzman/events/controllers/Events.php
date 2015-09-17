<?php namespace Ajdeguzman\Events\Controllers;

use Backend\Facades\BackendAuth;
use Backend\Facades\Backend;
use BackendMenu;
use Backend\Classes\Controller;
use \AJDEGUZMAN\Events\Models\Note;
use Illuminate\Support\Facades\Input;
use \AJDEGUZMAN\Events\Models;
use AJDEGUZMAN\Events\Plugin;
use System\Classes\PluginManager;

/**
 * Events Back-end Controller
 */
class Events extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function index(){
        $this->makeLists();
        $this->makeView('index');
    }

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ajdeguzman.Events', 'events', 'events');
    }

    public function store(){
        $note = new Models\Note;
        $note->title = Input::get('title');
        $note->description = Input::get('description', null);
        $note->user_id = BackendAuth::getUser()->id;
        
        if( $note->save() ) {
        \Flash::success('Note added successfully.');
        }
        else{
            \Flash::error('Validation error' );
        }
        
        return \Redirect::to( Backend::url() );
    }

    public function listExtendQueryBefore($query){
        $user_id = BackendAuth::getUser()->id;

        $query->where('user_id', '=', $user_id);
    }
    
    public function listOverrideColumnValue($record, $columnName){
      if( $columnName == "description" && empty($record->description) )
             return "[EMPTY]";
    }
}