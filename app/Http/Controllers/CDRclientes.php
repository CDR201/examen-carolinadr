<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\clientes;
use App\Http\Requests\Rclientes as RclientesRequests;


class CDRclientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Clientes;
    public function __construct (clientes $Clientes){
        $this->Clientes = $Clientes;
    }
    public function index()
    {

        $Clientes = clientes::all();
        return response()->json(['clientes'=>$Clientes]);
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
    public function store(RclientesRequests $request)
    {
        $Clientes = $this->Clientes->create($request->all());
    return response()->json($Clientes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Clientes = clientes::find($id);
      return $Clientes;
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
    public function update(RclientesRequests $request, clientes $Clientes)
    {
        $Clientes->update($request->all());
     return response()->json('ha sido modificado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $Clientes)
    {
        $Clientes->delete();
    return response()->json('el registro fue eliminado');
    }
}
