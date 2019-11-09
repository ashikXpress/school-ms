<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->smallInteger('gender_name');
            $table->string('date_of_birth');
            $table->integer('birth_certificate_number');
            $table->string('blood_group');
            $table->string('bus_facility')->nullable();
            $table->string('previous_institute_name');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('mother_occupation')->nullable();
            $table->string('local_guardian_name')->nullable();
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('contact_number');
            $table->string('contact_number2')->nullable();
            $table->string('group')->nullable();
            $table->string('admission_date')->nullable();
            $table->decimal('admission_fees',9,2);
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->foreign('class_id')->references('id')->on('classes');
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
        Schema::dropIfExists('students');
    }
}
