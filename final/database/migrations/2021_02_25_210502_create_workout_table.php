<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('image');
            $table->string('Date');
            $table->string('price');
            $table->text('description');
            $table->UnsignedBigInteger('trainer_id')->nullable();
            $table->foreign('trainer_id')->references('id')->on('trainer')->onDelete('cascade');
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
        Schema::dropIfExists('workout');
    }
}
