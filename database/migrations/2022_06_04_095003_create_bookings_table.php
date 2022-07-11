<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->dateTime('bookingStart');
            $table->dateTime('bookingEnd');
            $table->boolean("isBooked");

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('desk_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('desk_id')->references('id')->on('desks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
