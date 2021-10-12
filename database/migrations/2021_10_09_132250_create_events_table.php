<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('year_id')->unsigned()->index();
            $table->integer('month_id')->unsigned()->index();
            $table->integer('day_id')->unsigned()->index();
            $table->date('date');
            $table->string('dzo_date');
            $table->string('eng_star');
            $table->string('dzo_star');
            $table->string('eng_cyclic_animal');
            $table->string('dzo_cyclic_animal');
            $table->string('tendrel');
            $table->string('eng_elemental_combination');
            $table->string('dzo_elemental_combination');
            $table->string('eng_good_day');
            $table->string('dzo_good_day');
            $table->string('eng_bad_day');
            $table->string('dzo_bad_day');
            $table->string('eng_good_time');
            $table->string('dzo_good_time');
            $table->string('eng_hindrance');
            $table->string('dzo_hindrance');
            $table->string('eng_dakini');
            $table->string('dzo_dakini');
            $table->string('eng_good_direction');
            $table->string('dzo_good_direction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
