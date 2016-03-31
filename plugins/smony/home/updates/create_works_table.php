<?php namespace Smony\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateWorksTable extends Migration
{

    public function up()
    {
        Schema::create('smony_home_works', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_home_works');
    }

}
