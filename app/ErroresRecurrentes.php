<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErroresRecurrentes extends Model
{
    protected $table = 'erroresrecurrentes';

    public function proceso(){

      return $this -> belongsto('App\Procesos');
    }
}
