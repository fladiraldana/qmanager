<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RevisionPross extends Model
{
    protected $table = 'revisionpross';

    public function base(){

        return $this-> belongsto('App\Bases');
    }

    public function analista(){

        return $this-> belongsto('App\MaestroEmpleados');
    }

    public function procesos(){

        return $this -> belongsto('App\Procesos');
    }

}
