<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearMaestroempleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestroempleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codemp', 15)->unique();
            $table->dateTime('fechanacimiento');

            $table->integer('estadoemp_id')->unsigned();
            $table->foreign('estadoemp_id')->references('id')->on('estadoemp');

            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');

            $table->integer('modalidademp_id')->unsigned();
            $table->foreign('modalidademp_id')->references('id')->on('modalidadesemp');

            $table->integer('succliente_id')->unsigned();
            $table->foreign('succliente_id')->references('id')->on('succlientes');


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
        Schema::dropIfExists('maestroempleados');
    }
}
