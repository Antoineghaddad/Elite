<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapy', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('image');
            $table->string('Date');
            $table->string('price');
            $table->text('description');
            $table->UnsignedBigInteger('therapist_id')->nullable();
            $table->foreign('therapist_id')->references('id')->on('therapist')->onDelete('cascade');
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
        Schema::dropIfExists('therapy');
    }
}
