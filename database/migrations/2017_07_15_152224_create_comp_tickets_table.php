<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comp_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id')->nullable();
            $table->integer('event_id')->unsigned();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('street_address_1')->nullable();
            $table->string('street_address_2')->nullable();
            $table->string('city', 50)->nullable();
            $table->char('state', 2)->nullable();
            $table->char('zip_code', 10)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 70)->nullable();
            $table->smallInteger('num_tickets');
            $table->boolean('notified')->nullable();
            $table->timestamp('time_notified')->nullable();
            $table->timestamps();

        });

        // add the event_id foreign key
        // which references the events.id column
        Schema::table('comp_tickets', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop the event_id foreign key
        Schema::table('comp_tickets', function (Blueprint $table) {
            $table->dropForeign('comp_tickets_event_id_foreign');
        });

        Schema::drop('comp_tickets');
    }
}
