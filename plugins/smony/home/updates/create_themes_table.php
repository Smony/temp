<?php namespace Smony\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateThemesTable extends Migration
{

    public function up()
    {
        Schema::create('smony_home_themes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_site');
            $table->string('title_site');
            $table->string('description_site');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_home_themes');
    }

}
