<?php

namespace App\Http\Controllers;
use App\Http\Requests\storepais;
use App\Paises;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;


class PaisesController extends Controller
{
    public function index(){
        //return 'Esta es la vista del formulario paises';

        $pais =  Paises::all();


        return view('formularios.paises.paisesindex', compact('pais'));
    }

    /**
     * @return Factory|\Illuminate\View\View
     */
    public function create(){

        return view('formularios.paises.paisescrear');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(storepais $request)
    {
        //return 'Aqui se procesan los datos del formulario y se re dirige a otra pagina para evitar reenvios de informacion';

            $pais = new paises;
            $pais -> codpais = $request -> get('codigo');
            $pais -> nompais = $request -> get('descripcion');
            $pais -> save();

        return redirect()->route('paises.index');
    }

    public function show($codpais)
    {
        //
    }

    public function edit()
    {
        //return 'esta funcion muestra el formulario para editar datos de los paises';
    }

    public function update(Request  $recuest,$codpais)
    {
       // return 'Aqui se procesan los datos que se envian para edicion';
    }

    public function destroy($codpais)
    {
       // return 'aqui va la logica para eliminar una categoria segun el codigo del pais';
    }
}
