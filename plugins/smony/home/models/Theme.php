<?php namespace Smony\Home\Models;

use Model;

/**
 * Theme Model
 */
class Theme extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'smony_home_themes';

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