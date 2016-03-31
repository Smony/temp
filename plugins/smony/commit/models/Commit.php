<?php namespace Smony\Commit\Models;

use Model;

/**
 * Commit Model
 */
class Commit extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'smony_commit_commits';

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