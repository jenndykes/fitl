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
            $table->string('account_id');
            $table->string('event_name');
            $table->date('event_start_date');
            $table->date('event_end_date')->nullable();
            $table->time('event_start_time');
            $table->time('event_end_time')->nullable();
            $table->string('venue_name')->nullable();
            $table->longtext('notes')->nullable();
            $table->decimal('budget', 8, 2)->nullable();
            $table->string('ticket_vendor')->nullable();
            $table->smallInteger('tickets_sold')->nullable();
            $table->string('event_type')->nullable();
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
