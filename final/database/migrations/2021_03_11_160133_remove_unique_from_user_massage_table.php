<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueFromUserMassageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_massage', function (Blueprint $table) {
            $table->index('massage_id');
            $table->dropUnique(['massage_id', 'user_id']);
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
        Schema::table('user_massage', function (Blueprint $table) {
            $table->unique(['massage_id', 'user_id']);
            $table->unique(['time', 'day']);

        });
    }
}
