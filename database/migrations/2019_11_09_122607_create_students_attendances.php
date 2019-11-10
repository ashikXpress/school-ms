<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsAttendances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_name');
            $table->unsignedBigInteger('teacher_name');
            $table->string('attend_date');
            $table->smallInteger('status');
            $table->text('description')->nullable();
            $table->foreign('student_name')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('teacher_name')->references('id')->on('employees')->onDelete('cascade');
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
        Schema::dropIfExists('students_attendances');
    }
}
