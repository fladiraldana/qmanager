<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearRevisionpross extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisionpross', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('base_id')->unsigned();
            $table->foreign('base_id')->references('id')->on('bases');

            $table->integer('cantemp');

            $table->integer('analista_id')->unsigned();
            $table->foreign('analista_id')->references('id')->on('maestroempleados');

            $table->dateTime('feccorte');
            $table->dateTime('fecrecep');
            $table->dateTime('fecvalid');
            $table->datetime('fecentrega');

            $table->integer('proceso_id')->unsigned();
            $table->foreign('proceso_id')->references('id')->on('procesos');

            $table->integer('ordenval');

            $table->integer('controller_id')->unsigned();
            $table->foreign('controller_id')->references('id')->on('maestroempleados');

            $table->text('Observaciones');
            $table->boolean('error');
            $table->boolean('aprobacion');

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
        Schema::dropIfExists('revisionpross');
    }
}
