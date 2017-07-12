<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    //Paises

    protected $Table = 'paises';

    public function departamentos(){
      //Este pais tiene muchos departamentos.
      return $this->hasMany('App\Departamentos');
    }

    public function succlientes(){

        return $this -> hasMany('SucClientes');
    }

}
