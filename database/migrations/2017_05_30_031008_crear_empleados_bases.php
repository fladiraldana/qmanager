<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearEmpleadosBases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_bases', function (Blueprint $table) {

            $table->integer('base_id')->unsigned();
            $table->foreign('base_id')->references('id')->on('bases');

            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('maestroempleados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_bases');
    }
}
