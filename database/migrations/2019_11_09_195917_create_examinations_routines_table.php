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
            $table->string('exam_date');
            $table->unsignedBigInteger('exam_term_name_id')->nullable();
            $table->string('subject');
            $table->string('class');
            $table->string('shift');
            $table->string('section');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('academic_year');
            $table->unsignedBigInteger('examinations_guards_id')->nullable();
            $table->foreign('exam_term_name_id')->references('id')->on('examination_term');
            $table->foreign('examinations_guards_id')->references('id')->on('examinations_guards');
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
