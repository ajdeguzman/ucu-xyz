<?php namespace AJDEGUZMAN\Events\Models;

use Model;

/**
 * Event Model
 */
class Event extends Model
{
    // used for automatic validation using the defined rules.
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ajdeguzman_events';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [ 'user' => [ 'Backend\Models\User' ] ];

    public $table = 'ajdeguzman_events';
    
    protected $guarded = ['*'];
    
    protected $rules = [
        'title'         => 'required|min:4'
    ];
    
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}