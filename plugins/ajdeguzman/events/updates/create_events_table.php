<?php namespace AJDEGUZMAN\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('ajdeguzman_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->date('date_start');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ajdeguzman_events');
    }

}
