<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalles;
use App\Http\Requests\Rdetalles as RdetallesRequests;

class CDRdetalles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Detalles;
    public function __construct (detalles $Detalles){
        $this->Detalles = $Detalles;
    }
    public function index()
    {
        $Detalles = detalles::all();
        return response()->json(['detalles'=>$Detalles]);
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
    public function store(RdetallesRequests $request)
    {
        $Detalles = $this->Detalles->create($request->all());
    return response()->json($Detalles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Detalles = detalles::find($id);
      return $Detalles;
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
    public function update(RdetallesRequests $request, detalles $Detalles)
    {
        $Detalles->update($request->all());
        return response()->json('ha sido modificado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalles $Detalles)
    {
        return response()->json('el registro fue eliminado');
    }
}
