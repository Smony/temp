<?php namespace Smony\Commit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCommitsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_commit_commits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_commit_commits');
    }

}
