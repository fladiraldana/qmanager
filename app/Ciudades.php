<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    //Ciudades

    protected $Table = 'ciudades';

    public function departamento(){

      return $this -> belongsto('App\Departamentos');

    }

    public function succlientes(){

        return $this -> hasMany('SucClientes');
    }
}
