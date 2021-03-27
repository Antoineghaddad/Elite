<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTherapyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_therapy', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->UnsignedBigInteger('therapy_id')->nullable();
            $table->unique(['therapy_id', 'user_id']);
            $table->foreign('therapy_id')->references('id')->on('therapy')->onDelete('cascade');
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
        Schema::dropIfExists('user_therapy');
    }
}
