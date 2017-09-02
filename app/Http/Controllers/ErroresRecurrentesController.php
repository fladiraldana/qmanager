<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeerroresrec;
use App\ErroresRecurrentes;
use Illuminate\Contracts\View\Factory;
use App\Procesos;


class ErroresRecurrentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $errorrec = ErroresRecurrentes::all();
        $proceso  = Procesos::all();

        return view('formularios.Erroresrecurrentes.erroresrecurrentesindex', compact('errorrec', 'proceso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeerroresrec $request)
    {
        $errorrec = new ErroresRecurrentes;
        $errorrec -> errorrecurrente  = $request -> get('errortip');
        $errorrec -> proceso_id       = $request -> get('proceso');
        $errorrec ->  save();

        //ErroresRecurrentes::create($request->all());
        return ['created' => true];

        return redirect()->route('erroresrecurrentes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ErroresRecurrentes::find($id);
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
    public function update(storeerroresrec $request, $id)
    {
        $errorrec = ErroresRecurrentes::find($id);
        $errorrec -> errorrecurrente  = $request -> get('errortip');
        $errorrec -> proceso_id       = $request -> get('proceso');
        $errorrec -> update();
        return['update' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ErroresRecurrentes::destroy($id);
        return ['deleted' => true];
    }
}
