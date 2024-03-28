<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_exchanges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('make');
            $table->string('model');
            $table->string('registeration');
            $table->string('mileage');
            $table->string('color');
            $table->string('owners');
            $table->string('fuel_type');
            $table->string('transmissions');
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
        Schema::dropIfExists('part_exchanges');
    }
}
