<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAtributosToCuestionarioTable extends Migration
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
            $table->string('e1', 10);
            $table->string('e1a');
            $table->string('e2', 10);
            $table->string('e2a');
            $table->string('e3', 10);
            $table->string('e3a');
            $table->string('e4', 10);
            $table->string('e4a');
            $table->string('e5', 10);
            $table->string('e5a');
            $table->string('e6', 10);
            $table->string('e6a');
            $table->string('e7', 10);
            $table->string('e7a');
            $table->string('e8', 10);
            $table->string('e8a');
            $table->string('e9', 10);
            $table->string('e9a');
            $table->string('e10', 10);
            $table->string('e10a');
            $table->string('e11', 10);
            $table->string('e11a');
            $table->string('e12', 10); 
            $table->string('e12a');
            $table->string('e13', 10);
            $table->string('e13a');
            $table->string('e14', 10);
            $table->string('e14a');
            $table->string('e15', 10);
            $table->string('e15a');
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
