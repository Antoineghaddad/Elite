<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSalonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_salon', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->UnsignedBigInteger('salon_id')->nullable();
            $table->unique(['salon_id', 'user_id']);
            $table->foreign('salon_id')->references('id')->on('salon')->onDelete('cascade');
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
        Schema::dropIfExists('user_salon');
    }
}
