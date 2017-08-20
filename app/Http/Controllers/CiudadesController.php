<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeciudad;
use App\Ciudades;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Storage;
use Excel;
use App\Departamentos;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad = Ciudades::all();
        $departamento = Departamentos::all();

        return view('formularios.ciudades.ciudadesindex', compact('ciudad', 'departamento'));
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
    public function store(storeciudad $request)
    {
        $ciudad = new ciudades;
        $ciudad -> codciudad = $request -> get('codigo');
        $ciudad -> nameciudad = $request -> get('descripcion');
        $ciudad -> departamento_id = $request -> get('lista');
        $ciudad -> save();

        return redirect()->route('ciudades.index');    }

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

    public function masivo_ciudades(Request $request){

      $archivo = $request->file('archivo');
      $nombre_original = $archivo->getClientOriginalName();
      $extencion = $archivo->getClientOriginalExtension();
      $rl = storage::disk('archivos')->put($nombre_original, \File::get($archivo));
      $ruta = storage_path('archivos')."/".$nombre_original;

      if($rl){
        Excel::selectSheetsByIndex(0)->load($ruta,function($hoja){
          $hoja->each(function($fila){
              $ciudad = new Ciudades;
              $ciudad -> codciudad = $fila ->codigo;
              $ciudad -> nameciudad = $fila ->ciudad;
              $ciudad -> departamento_id = $fila ->departamento;
              $ciudad -> save();
          });
        });
    }

    return redirect()->route('ciudades.index');
  }

}
