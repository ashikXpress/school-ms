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
            $table->string('blood_group')->nullable();
            $table->string('present_address');
            $table->string('permanent_address')->nullable();
            $table->string('contact_number',200)->unique();
            $table->string('contact_number2')->nullable();


            $table->string('class');
            $table->string('roll')->nullable();
            $table->string('reg',15)->nullable();
            $table->string('id_number',15)->nullable();
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->string('group')->nullable();
            $table->integer('birth_certificate_number');
            $table->string('admission_date')->nullable();
            $table->decimal('admission_fees',15,2);
            $table->string('previous_institute_name')->nullable();
            $table->smallInteger('transport')->nullable();

            $table->string('father_name');
            $table->string('father_contact_number');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('mother_contact_number')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('local_guardian_name')->nullable();


            $table->string('email',50)->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
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
