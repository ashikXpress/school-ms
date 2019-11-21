<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day');
            $table->string('class');
            $table->string('period');
            $table->string('subject');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('room_number');
            $table->string('teacher_name');
            $table->string('group')->nullable();
            $table->string('shift')->nullable();
            $table->string('section')->nullable();
            $table->string('academic_year');

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
        Schema::dropIfExists('routines');
    }
}
