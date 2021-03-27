<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromUserTherapyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_therapy', function (Blueprint $table) {
            $table->index('therapy_id');
            $table->dropUnique(['therapy_id', 'user_id']);
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
        Schema::table('user_therapy', function (Blueprint $table) {
            $table->unique(['therapy_id', 'user_id']);
            $table->unique(['time', 'day']);
        });
    }
}
