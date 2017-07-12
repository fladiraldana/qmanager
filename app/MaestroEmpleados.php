<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaestroEmpleados extends Model
{
    protected $table = 'maestroempleados';

    public function estados(){

        return $this -> belongsto('App\empestados');
    }

    public function cargos(){

        return $this -> belongsto('App\Cargos');
    }

    public function modalidad(){

        return $this -> belongsto('App\ModalidadesEmp');
    }

    public function contactos(){

        return $this -> hasMany('App\Contactoemp');
    }

    public function revpross(){

        return $this -> hasMany('App\RevisionPross');
    }

}
