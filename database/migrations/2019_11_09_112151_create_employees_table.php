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
            $table->string('user_type');
            $table->smallInteger('gender_name');
            $table->string('date_of_birth');
             $table->string('blood_group');
            $table->smallInteger('marital_status')->nullable();
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->string('contact_number',15)->unique();
            $table->string('contact_number2')->nullable();

            $table->string('designation');
            $table->integer('nid');
            $table->string('education_qualification');
            $table->string('joining_date')->nullable();
            $table->decimal('basic_salary',15,2);
            $table->string('subject_speciality')->nullable();
            $table->decimal('others_honorarium',15,2)->nullable();


            $table->string('father_name');
            $table->string('mother_name');
            $table->string('emergency_number');


            $table->string('photo')->nullable();
            $table->string('email',250)->nullable()->unique();
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
