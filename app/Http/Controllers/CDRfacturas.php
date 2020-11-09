<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facturas;
use App\Http\Requests\Rfacturas as RfacturasRequests;

class CDRfacturas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Facturas;
    public function __construct (facturas $Facturas){
        $this->Facturas = $Facturas;
    }
    public function index()
    {
        $Facturas = facturas::all();
        return response()->json(['facturas'=>$Facturas]);
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
    public function store(RfacturasRequests $request)
    {
        $Facturas = $this->Facturas->create($request->all());
        return response()->json($Facturas);
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
        $Facturas = facturas::find($id);
      return $Facturas;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RfacturasRequests $request, facturas $Facturas)
    {
        $Facturas->update($request->all());
     return response()->json('ha sido modificado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(facturas $Facturas)
    {
        $Facturas->delete();
        return response()->json('el registro fue eliminado');
    }
}
