<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaestroClientes extends Model
{
    protected $table = 'maestroclientes';

    public function bases(){

        return $this -> hasMany('App\Bases');

    }

    public function sucursales(){

        return $this -> hasMany('App\SucClientes');
    }
}
