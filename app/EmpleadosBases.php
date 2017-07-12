<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadosBases extends Model
{
    protected $table = 'empleados_bases';

    public function empleados(){

        return $this -> belongsto('MaestroEmpleados');
        //Pendiente verificar como se programa la relacion
        //muchos a muchos en laravel,
    }

    public function bases(){

        return $this -> belongsto('Bases');
    }

}

/*Aunque se crearon las relaciones de pertenencia a la tabla de
muchos a muchos se debe confirmar si esta es la forma correcta o hay
un metodo resumido*/  
