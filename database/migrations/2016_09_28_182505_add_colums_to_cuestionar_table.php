<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToCuestionarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cuestionario', function (Blueprint $table) {
            //
            $table->string('check', 10);
            $table->string('check2', 10);
            $table->string('check3', 10);
            $table->string('check4', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuestionario', function (Blueprint $table) {
            //
        });
    }
}
