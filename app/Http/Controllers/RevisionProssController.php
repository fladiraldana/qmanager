<?php

namespace App\Http\Controllers;
use App\Http\Request\storerevisionproceso;
use App\RevisionPross;
use App\Procesos;
use App\Bases;
use Illuminate\contracts\View\Factory;



class RevisionProssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revisionp = RevisionPross::all();

        return view('formularios.Revisionpross.revisionprossindex', compact('revisionp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proceso = Procesos::all();
        $base    = Bases::all();

        return view('formularios.Revisionpross.revisionprosspartials', compact('proceso','base'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storerevisionproceso $request)
    {
        $revisionp = new RevisionPross;
        $revisionp -> base_id = $request -> get('base');
        $revisionp -> cantemp = $request -> get('cantemp');
        $revisionp -> analista_id = $request -> get('analista');
        $revisionp -> feccorte = $request -> get('feccorte');
        $revisionp -> fecrecep = $request -> get('fecrecep');
        $revisionp -> fecvalid = $request -> get('fecvalid');
        $revisionp -> fecentrega = $request -> get('fecentrega');
        $revisionp -> proceso_id = $request -> get('proceso');
        $revisionp -> ordenval = $request -> get('ordenrev');
        $revisionp -> controller_id = $request -> get('controller');
        $revisionp -> Observaciones = $request -> get('observacion');
        $revisionp -> error = $request -> get('conterror');
        $revisionp -> aprobacion = $request -> get('aprov');
        $revisionp -> save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
