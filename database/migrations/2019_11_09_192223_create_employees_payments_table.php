<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id');
            $table->string('payment_date');
            $table->string('payment_type');
            $table->string('receipt_no');
            $table->decimal('basic_salary');
            $table->decimal('others_honorarium')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('payment_by')->nullable();
            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('payment_by')->references('id')->on('users');
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
        Schema::dropIfExists('employees_payments');
    }
}
