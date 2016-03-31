<?php namespace Hambern\Exify\Models;

use Model;

/**
 * Exif Model
 */
class Exif extends Model
{

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'hambern_exify_exifs';
	/**
	 * @var array Relations
	 */
	public $hasOne = [];
	public $hasMany = [];
	public $belongsTo = [
		'file' => ['System\Models\File'],
	];
	public $belongsToMany = [];
	public $morphTo = [];
	public $morphOne = [];
	public $morphMany = [];
	public $attachOne = [];
	public $attachMany = [];
	public $timestamps = false;
	/**
	 * @var array Guarded fields
	 */
	protected $guarded = [''];
	/**
	 * @var array Fillable fields
	 */
	protected $fillable = [];

}
