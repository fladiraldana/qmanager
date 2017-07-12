<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bases extends Model
{
    protected $table = 'bases';

    public function clientes(){

      return $this -> belongsto('App\MaestroClientes');

    }

    public function revpross(){
      $this-> hasMany('App\RevisionPross');
    }
}
