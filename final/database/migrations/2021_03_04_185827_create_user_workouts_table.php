<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workouts', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->UnsignedBigInteger('workout_id')->nullable();
            $table->unique(['workout_id', 'user_id']);
            $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
            $table->string('day');
            $table->string('time');
            $table->unique(['time', 'day']);
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
        Schema::dropIfExists('user_workouts');
    }
}
