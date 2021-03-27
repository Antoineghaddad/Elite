<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('price');
            $table->text('description');
            $table->UnsignedBigInteger('massager_id')->nullable();
            $table->foreign('massager_id')->references('id')->on('massager')->onDelete('cascade');
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
        Schema::dropIfExists('massage');
    }
}
