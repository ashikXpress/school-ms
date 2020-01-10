<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email',191)->unique();
            $table->string('role')->nullable();
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('password_token')->nullable();

            $table->smallInteger('gender_name');
            $table->string('date_of_birth');
            $table->string('blood_group');
            $table->smallInteger('marital_status')->nullable();
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->string('contact_number',50)->unique();
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

            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
