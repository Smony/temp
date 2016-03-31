<?php namespace Smony\Home\Models;

use Model;

/**
 * Coffee Model
 */
class Coffee extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'smony_home_coffees';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}