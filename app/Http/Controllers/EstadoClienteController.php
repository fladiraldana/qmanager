<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeestadocliente;
use App\EstadoCliente;
use Illuminate\Contracts\View\Factory;



class EstadoClienteController extends Controller
{
    public function index()
    {
        $estadoc = EstadoCliente::all();

        return view('formularios.Estadoscliente.estadosclienteindex', compact('estadoc'));
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
    public function store(storeestadocliente $request)
    {
        $estadoc = new EstadoCliente;
        $estadoc -> estado  = $request -> get('descripcion');
        $estadoc -> save();

        return view('formularios.Estadoscliente.estadosclienteindex');
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
