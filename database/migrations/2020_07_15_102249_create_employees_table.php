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
            $table->string('photo');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('city_id');
            $table->string('address');
            $table->string('birthday');
            $table->string('social_id');
            $table->string('family');
            $table->string('Certificate');
            $table->string('join_date');
            $table->string('department_id');
            $table->string('job_type_id');
            $table->string('salary');
            $table->string('curreny_id');
            $table->string('per_id');
            $table->string('status_id');
            $table->string('bank_id');
            $table->string('branch_id');
            $table->string('bank_account');
            $table->string('iban');
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
