<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearBases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombase',100);

            $table->integer( 'maestroclientes_id')->unsigned();
            $table->foreign('maestroclientes_id')->references('id')->on('maestroclientes');

            $table->integer('estadocliente_id')->unsigned();
            $table->foreign('estadocliente_id')->references('id')->on('estadoscliente');

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
        Schema::dropIfExists('bases');
    }
}
