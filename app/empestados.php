<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empestados extends Model
{
  //Estados empleados.
    protected $table = 'empestados';

    public function empleados(){
      return $this->hasmany('App\Empleados');
    }
}
