<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalidadesEmp extends Model
{
    protected $table = 'modalidadesemp';


    public function empleado(){

        return $this-> hasMany('App\MestroEmpleados');
    }


}
