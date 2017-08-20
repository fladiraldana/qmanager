<?php

namespace App\Http\Controllers;

use App\Http\Request\storemaestroclientes;
use App\MaestroClientes;
use Illuminate\Contracts\View\Factory;


class MaestroClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestroc = MaestroClientes::all();

        return view('forularios.Maestroclientes.maestroclientesindex', compact('maestroc'));
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
    public function store(storemaestroclientes $request)
    {
        $maestroc = new MaestroClientes;
        $maestroc -> nit = $request -> get('cliente');
        $maestroc -> dv = $request -> get('dv');
        $maestroc -> razonsocial = $request -> get('razonsoc');
        $maestroc -> estadocliente_id = $request -> get('estado');
        $maestroc -> fecingreso = $request -> get('fecing');
        $maestroc -> fecsalida = $request -> get('fecsal');
        $maestroc -> save();
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
