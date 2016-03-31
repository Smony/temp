<?php namespace Hambern\Exify;

use Model;
use PHPExif\Reader\Reader;
use System\Classes\PluginBase;
use System\Models\File as FileBase;

/**
 * Exify Plugin Information File
 */
class Plugin extends PluginBase
{

	public function boot()
	{
		FileBase::extend(function ($model) {
			$model->addDynamicMethod('exif', function () use ($model) {
				if (strpos($model->content_type, 'image') !== false) {
					$exif = new Model();
					$reader = Reader::factory(Reader::TYPE_NATIVE);
					$path = 'http://' . $_SERVER['SERVER_NAME'] . $model->path;
					if ($data = $reader->read($path)->getData()) {
						foreach ($data as $key => $value) {
							if (is_object($value)) {
								foreach ($value as $key => $value) {
									if (!is_object($value)) {
										$exif->attributes[snake_case($key)] = $value;
									}
								}
							} else $exif->attributes[snake_case($key)] = $value;
						}
						return $exif;
					}
				}
			});
		});
	}

	/**
	 * Returns information about this plugin.
	 *
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'        => 'hambern.exify::lang.plugin.name',
			'description' => 'hambern.exify::lang.plugin.description',
			'author'      => 'Hambern',
			'icon'        => 'icon-camera',
		];
	}

}
