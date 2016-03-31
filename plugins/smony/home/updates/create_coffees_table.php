<?php namespace Smony\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCoffeesTable extends Migration
{

    public function up()
    {
        Schema::create('smony_home_coffees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('coffee_cups');
            $table->integer('projects');
            $table->integer('working_days');
            $table->integer('clients');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_home_coffees');
    }

}
