<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->smallInteger('gender');
            $table->date('date_of_birth');
            $table->integer('nid');
            $table->string('blood_group');
            $table->string('marital_status')->nullable();
            $table->string('education_qualification');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('address');
            $table->text('address2')->nullable();
            $table->string('contact_number')->unique();
            $table->string('contact_number2')->nullable();
            $table->date('joining_date')->nullable();
            $table->decimal('basic_salary');
            $table->string('subject_speciality')->nullable();
            $table->decimal('others_honarian')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
