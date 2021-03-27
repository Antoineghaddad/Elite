<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone');
            $table->string('day');
            $table->string('start_time');
            $table->string('end_time');
            $table->UnsignedBigInteger('salon_id')->nullable();
            $table->foreign('salon_id')->references('id')->on('salon')->onDelete('cascade');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('calendar');
    }
}
