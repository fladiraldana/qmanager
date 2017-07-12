<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model{
    //departamentos.
    protected $Table = 'departamentos';

    public function pais(){
      // Estos de partamentos perteneces a un pais.
        return $this->belongsTo('App\Paises');
    }

    public function ciudad(){
      // Este departamento esta presente en muchas ciudades.
        return $this -> hasMany('App\ciudades');
    }

    public function succlientes(){
      // Este Departamento esta presente en muchas sucursales.
        return $this -> hasMany('SucClientes');
    }
}
