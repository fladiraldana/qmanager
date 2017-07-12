<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactoEmp extends Model
{
    protected $table = 'contactoemp';

    public function empleados(){

        return $this -> belongsto('App\MaestroEmpleados');

    }
}
