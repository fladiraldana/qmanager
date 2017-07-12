<?php

namespace App\Http\Controllers;
use App\Http\Requests\storedepart;
use App\Departamentos;
use App\Paises;
use Illuminate\Contracts\View\Factory;

class DepartamentosController extends Controller
{
    public function index(){


        $departamento =  Departamentos::all();
        $pais         =  Paises::all();

        return view('formularios.departamentos.departindex',compact('departamento', 'pais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.paises.paisescrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storedepart $request)
    {
          $departamento = new departamentos;
          $departamento -> codedepart = $request -> get('codigo');
          $departamento -> nomdepart  = $request -> get('descripcion');
          $departamento -> pais_id    = $request -> get('lista');
          $departamento -> save();

          return redirect()->route('departamentos.index');
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
