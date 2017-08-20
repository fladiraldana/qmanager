<?php

namespace App\Http\Controllers;
use App\Http\Request\storemaestroempleado;
use App\MaestroEmpleados;
use Illuminate\Contracts\View\Factory;



class MaestroEmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestroe = MaestroEmpleados::all();

        return view('formularios.Maestroempleados.maestroempleadosindex', compact('maestroe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storemaestroempleado $request)
    {
        $maestre = new MestroEmpleados;
        $maestroe -> codemp = $request -> get('empleado');
        $maestroe -> fechanacimiento = $request -> get('fecnac');
        $maestroe -> estadoemp_id = $request -> get('estado');
        $maestroe -> cargo_id = $request -> get('cargo');
        $maestroe -> modalidademp_id = $request -> get('modalidad');
        $maestroe -> succliente_id = $request -> get('sucursal');
        $maestroe -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
