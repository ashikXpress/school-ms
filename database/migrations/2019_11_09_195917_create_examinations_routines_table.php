<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationsRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations_routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->unsignedBigInteger('exam_name_id')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('class_id');
            $table->string('shift')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->string('academic_year');
            $table->unsignedBigInteger('authorized_id')->nullable();
            $table->foreign('exam_name_id')->references('id')->on('examinations');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('authorized_id')->references('id')->on('employees');
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
        Schema::dropIfExists('examinations_routines');
    }
}
