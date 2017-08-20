<?php

namespace App\Http\Controllers;
Use App\Http\Requests\storecontactoemp;
Use App\ContactoEmp;
use Illuminate\Contracts\View\Factory;



class ContactoEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactoe = ContactoEmp :: all();

        Return view('formularios.Contactosemp.contactosindex', compact('contactoe'));
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
    public function store(storecontactoemp $request)
    {
        $contactoe = new ContactoEmp;
        $contactoe -> empleado_id  = $request -> get('empleado');
        $contactoe -> email = $request -> get('email');
        $contactoe -> telefono = $request -> get('telefono');
        $contactoe -> estencion = $request -> get('extencion');
        $contactoe -> movil = $request -> get('Movil');
        $contactoe -> save();
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
