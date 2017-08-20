<?php

namespace App\Http\Controllers;
use App\Http\Request\storeempestados;
use App\empestados;
use Illuminate\Contracts\View\Factory;


class EmpEstadosController extends Controller
{
    public function index()
    {

        $empestado = empestados::all();


          return view('formularios.estadoemp.empestadoindex', compact('empestado'));
        //view('formularios.estadoemp.empestadoindex', compact('empestado'))
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
    public function store(storeempestado $request)
    {
        $empestado = new empestados;
        $empestado -> estado = $request -> get('descripcion');
        $empestado -> save();

          return redirect()->route('empestado.index');
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
