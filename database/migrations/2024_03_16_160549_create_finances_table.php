<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('marital_status');
            $table->string('dob');
            $table->string('license_no');
            $table->integer('dependents');
            $table->string('mobile');
            $table->string('landline')->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('postcode');
            $table->string('residential_status');
            $table->string('time_at_address_year');
            $table->string('time_at_address_month');
            $table->string('occupation');
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('employer_postcode');
            $table->string('employer_telephone');
            $table->string('employer_mobile');
            $table->string('weekly_income');
            $table->string('time_with_employer_year');
            $table->string('time_with_employer_month');
            $table->string('bank_name');
            $table->string('branch');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('short_code');
            $table->string('account_type');
            $table->string('time_with_bank_year');
            $table->string('time_with_bank_month');
            $table->foreign('vehicle_id')->references('id')->on('listings')->onDelete('cascade');
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
        Schema::dropIfExists('finances');
    }
}
