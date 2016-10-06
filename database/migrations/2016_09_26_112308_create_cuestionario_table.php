<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p1', 10);
            $table->string('p1a', 50);
            $table->string('p2', 10);
            $table->string('p2a', 50);
            $table->string('p3', 10);
            $table->string('p3a', 50);
            $table->string('p4', 10);
            $table->string('p5', 10);
            $table->string('p6', 10);
            $table->string('p7', 10);
            $table->string('p8', 10);
            $table->string('p9', 10);
            $table->string('p10', 10);
            $table->string('p11', 10);
            $table->string('p12', 10);
            $table->string('p13', 10);
            $table->string('p14', 10);
            $table->string('p15a', 10);
            $table->string('p15b', 10);
            $table->string('p15c', 10);
            $table->string('p15d', 10);
            $table->string('p15e', 10);
            $table->string('p15f', 10);
            $table->string('p15g', 10);
            $table->string('p15h', 10);
            $table->string('p15i', 10);
            $table->string('p15j', 10);
            $table->string('p16', 10);
            $table->string('p16a',10);
            $table->string('p16b',50);
            $table->string('p16c',50);
            $table->string('p17a', 10);
            $table->string('p17b', 10);
            $table->string('p17c', 10);
            $table->string('p17d', 10);
            $table->string('p17e', 10);
            $table->string('p17f', 10);
            $table->string('p17g', 10);
            $table->string('p17h', 10);
            $table->string('p18', 10);
            $table->string('p18a', 10);
            $table->string('p18b', 50);
            $table->string('p19', 10);
            $table->string('p19a', 50);
            $table->string('p19b', 10);
            $table->string('p19c', 50);
            $table->string('p20', 10);
            $table->string('p20a', 50);
            $table->string('p20b', 10);
            $table->string('p20c', 50);
            $table->string('p21', 10);
            $table->string('p21a', 50);
            $table->string('p22', 10);
            $table->string('p22a', 50);
            $table->string('p22b', 10);
            $table->string('p22c', 50);
            $table->string('p23', 10);
            $table->string('p23a', 50);
            $table->string('p24', 10);
            //Formulario Coopelesca
            $table->string('p25', 10);
            $table->string('p25a', 100);
            $table->string('p26', 10);
            $table->string('p27', 10);
            $table->string('p28', 10);
            $table->string('p28a', 50);
            $table->string('p29', 10);
            $table->string('p30', 10);
            $table->string('p31', 10);
            $table->string('p32', 10);
            $table->string('p33', 10);
            //Preguntas para mujeres
            $table->string('p34a', 10);
            $table->string('p34b', 10);
            $table->string('p34c', 50);
            $table->string('p34d', 50);
            $table->string('p34e', 10);
            $table->string('p34f', 10);
            $table->string('p34f1', 50);
            $table->string('p34g1', 25);
            $table->string('p34g2', 50);
            $table->string('p34h', 10);
            $table->string('p34h1', 25);
            $table->string('p34h2', 10);
            $table->string('detalles');
            $table->timestamps();
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
        Schema::dropIfExists('cuestionario');
    }
}
