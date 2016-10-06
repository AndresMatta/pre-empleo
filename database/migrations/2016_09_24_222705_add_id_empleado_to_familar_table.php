<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdEmpleadoToFamilarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('familiar', function (Blueprint $table) {
            //
            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('familiar', function (Blueprint $table) {
            //
        });
    }
}
