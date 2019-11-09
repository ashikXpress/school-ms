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
            $table->smallInteger('status');
            $table->date('payment_date');
            $table->string('payment_type');
            $table->decimal('amount');
            $table->string('payment_category');
            $table->unsignedBigInteger('payment_by')->nullable();
            $table->unsignedBigInteger('authorized_by')->nullable();
            $table->text('description');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('payment_by')->references('id')->on('employees');
            $table->foreign('authorized_by')->references('id')->on('employees');

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
