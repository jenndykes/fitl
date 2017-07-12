<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('event_name');
            $table->date('event_date');
            $table->time('start_time');
            $table->string('location');
            $table->longtext('notes');
            $table->decimal('budget', 8, 2);
            $table->string('ticket_vendor');
            $table->smallInteger('tickets_sold');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
