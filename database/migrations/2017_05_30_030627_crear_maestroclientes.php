<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearMaestroclientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestroclientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit',15)->unique();
            $table->string('dv',2);
            $table->string('razonsocial',250);

            $table->integer('estadocliente_id')->unsigned();
            $table->foreign('estadocliente_id')->references('id')->on('estadoscliente');

            $table->dateTime('fecingreso');
            $table->dateTime('fecsalida');
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
        Schema::dropIfExists('maestroclientes');
    }
}
