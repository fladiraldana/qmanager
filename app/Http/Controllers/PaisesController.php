<?php

namespace App\Http\Controllers;
use App\Http\Requests\storepais;
use App\Paises;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Storage;
use Excel;


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

    public function masivo_paises(Request $request){

      $archivo = $request->file('archivo');
      $nombre_original = $archivo->getClientOriginalName();
      $extencion      = $archivo->getClientOriginalExtension();
      $rl = storage::disk('archivos')->put($nombre_original, \File::get($archivo));
      $ruta = storage_path('archivos')."/". $nombre_original;

      if ($rl){

        Excel::selectSheetsByIndex(0)->load($ruta, function($hoja){
          $hoja->each(function($fila){

            $pais = new paises;
            $pais -> codpais = $fila ->codigo;
            $pais -> nompais = $fila->nombre;
            $pais -> save();

          });
        });
      }

      return redirect()->route('paises.index');


    }
}
