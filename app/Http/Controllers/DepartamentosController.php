<?php

namespace App\Http\Controllers;
use App\Http\Requests\storedepart;
use App\Departamentos;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Storage;
use Excel;
use App\Paises;


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

    public function masivo_departamentos(Request $request){

      $archivo = $request->file('archivo');
      $nombre_original = $archivo->getClientOriginalName();
      $extencion      = $archivo->getClientOriginalExtension();
      $rl = storage::disk('archivos')->put($nombre_original, \File::get($archivo));
      $ruta = storage_path('archivos')."/". $nombre_original;

      if ($rl){

        Excel::selectSheetsByIndex(0)->load($ruta, function($hoja){
          $hoja->each(function($fila){

            $departamento = new departamentos;
            $departamento -> codedepart = $fila ->codigo;
            $departamento -> nomdepart  = $fila ->descripcion;
            $departamento -> pais_id    = $fila ->pais;
            $departamento -> save();

          });
        });
      }

      return redirect()->route('departamentos.index');


    }



}
