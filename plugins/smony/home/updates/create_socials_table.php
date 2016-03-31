<?php namespace Smony\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSocialsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_home_socials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('pinterest');
            $table->string('instagram');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_home_socials');
    }

}
