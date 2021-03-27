<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge', function (Blueprint $table) {
            $table->id();
            $table->string('move1');
            $table->string('reps1');
            $table->string('image1');
            $table->string('move2');
            $table->string('reps2');
            $table->string('image2');
            $table->string('move3');
            $table->string('reps3');
            $table->string('image3');
            $table->string('move4');
            $table->string('reps4');
            $table->string('image4');
            $table->string('move5');
            $table->string('reps5');
            $table->string('image5');
            $table->string('move6');
            $table->string('reps6');
            $table->string('image6');
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
        Schema::dropIfExists('challenge');
    }
}
