<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instanties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Voornaam');
            $table->string('Achternaam');
            $table->dateTime('CheckIn');
            $table->dateTime('CheckOut');
            $table->boolean('Student');
            $table->time('TotalTime');
            $table->string('Rfid');
            $table->boolean('Checkedin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instanties');
    }
}
