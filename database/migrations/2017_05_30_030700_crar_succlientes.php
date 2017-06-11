<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrarSucclientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('succlientes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('maestroclientes');

            $table->string('direccion',100);
            $table->string('oficina',10);

            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises');

            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            $table->integer('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')->references('id')->on('ciudades');

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
        Schema::dropIfExists('succlientes');
    }
}
