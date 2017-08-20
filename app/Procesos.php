<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procesos extends Model
{
    protected $table = 'procesos';

    public function revisionpross(){

        return $this-> hasMany('App\RevisionPross');
    }

    public function erroresrecurrentes(){

        return $this -> hasMany('App\ErroresRecurrentes');

    }

}
