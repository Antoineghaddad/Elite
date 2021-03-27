<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromUserWorkoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_workouts', function (Blueprint $table) {
            $table->index('workout_id');
            $table->dropUnique(['workout_id', 'user_id']);
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
        Schema::table('user_workouts', function (Blueprint $table) {
            $table->unique(['workout_id', 'user_id']);
            $table->unique(['time', 'day']);
        });
    }
}
