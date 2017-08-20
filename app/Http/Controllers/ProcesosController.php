<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeprocaudit;
use App\Procesos;
use Illuminate\contracts\View\Factory;



class ProcesosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proceso = Procesos::all();

        return view('formularios.Procesos.procesosindex', compact('proceso'));
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
    public function store(storeprocaudit $request)
    {
        $proceso = new Procesos;
        $proceso -> nomproceso = $request -> get('proceso');
        $proceso -> save();

        return redirect()->route('procesos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProcesosController  $procesosController
     * @return \Illuminate\Http\Response
     */
    public function show(ProcesosController $procesosController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProcesosController  $procesosController
     * @return \Illuminate\Http\Response
     */
    public function edit(ProcesosController $procesosController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProcesosController  $procesosController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcesosController $procesosController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProcesosController  $procesosController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProcesosController $procesosController)
    {
        //
    }
}
