<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonalToCuestionarioTable extends Migration
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
            $table->string('nombre');
            $table->string('identificacion');
            $table->string('edad');
            $table->string('estado_civil');
            $table->string('nacionalidad');
            $table->string('residencia');
            $table->string('puesto');
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
