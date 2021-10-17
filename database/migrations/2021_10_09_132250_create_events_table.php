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
            $table->longText('eng_star');
            $table->longText('dzo_star');
            $table->longText('eng_cyclic_animal');
            $table->longText('dzo_cyclic_animal');
            $table->longText('tendrel');
            $table->longText('eng_elemental_combination');
            $table->longText('dzo_elemental_combination');
            $table->longText('eng_good_day');
            $table->longText('dzo_good_day');
            $table->longText('eng_bad_day');
            $table->longText('dzo_bad_day');
            $table->longText('eng_good_time')->nullable();
            $table->longText('dzo_good_time')->nullable();
            $table->longText('eng_hindrance');
            $table->longText('dzo_hindrance');
            $table->longText('eng_dakini');
            $table->longText('dzo_dakini');
            $table->longText('eng_good_direction');
            $table->longText('dzo_good_direction');
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
