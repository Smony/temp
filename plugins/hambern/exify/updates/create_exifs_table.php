<?php namespace Hambern\Exify\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateExifsTable extends Migration
{

	public function up()
	{
		Schema::create('hambern_exify_exifs', function ($table) {
			$table->integer('file_id');
			$table->string('aperture');
			$table->string('author');
			$table->string('camera');
			$table->string('caption');
			$table->string('color_space');
			$table->string('copyright');
			$table->string('creationdate');
			$table->string('credit');
			$table->string('exposure');
			$table->string('file_size');
			$table->string('focal_length');
			$table->string('focal_distance');
			$table->string('headline');
			$table->string('height');
			$table->string('horizontal_resolution');
			$table->string('iso');
			$table->string('job_title');
			$table->string('keywords');
			$table->string('mime_type');
			$table->string('orientation');
			$table->string('software');
			$table->string('source');
			$table->string('title');
			$table->string('vertical_resolution');
			$table->string('width');
			$table->string('gps');
		});
	}

	public function down()
	{
		Schema::dropIfExists('hambern_exify_exifs');
	}

}
