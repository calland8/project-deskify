<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('room');
            $table->integer('desk_number');

            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')->references('id')->on('offices');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('desks');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
