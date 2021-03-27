<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromUserSalonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_salon', function (Blueprint $table) {
            $table->index('salon_id');
            $table->dropUnique(['salon_id', 'user_id']);
            $table->dropUnique(['time', 'day']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_salon', function (Blueprint $table) {
            $table->unique(['salon_id', 'user_id']);
            $table->unique(['time', 'day']);
        });
    }
}
