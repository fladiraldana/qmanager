<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SucClientes extends Model
{
    protected $table = 'succlientes';


    public function cliente(){
// Estas sucursales pertenece a un cilente.
        return $this -> belongsto('App\MaestroClientes');
    }

    public function ciudad(){
// Estas sucursales pertenecen a una ciudad.
        return $this -> belongsto('App\Ciudades');
    }

    public function departamento(){
    //  Esta sucursal pertenece a un Departamento.
        return $this -> belongsto('App\Departamentos');
    }

    public function pais(){
      // Estasucursal pertence a un pais.
        return $this -> belongsto('App\Paises');
    }
}
