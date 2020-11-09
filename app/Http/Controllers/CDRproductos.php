<?php

namespace App\Http\Controllers;
use App\productos;
use App\Http\Requests\Rpeoductos as RpeoductosRequests;

use Illuminate\Http\Request;

class CDRproductos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Productos;
    public function __construct (productos $Productos){
        $this->Productos = $Productos;
    }
    public function index()
    {
        $Productos = productos::all();
        return response()->json(['porductos'=>$Productos]);
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
    public function store(RpeoductosRequests $request)
    {
        $Productos = $this->Productos->create($request->all());
    return response()->json($Productos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Productos = productos::find($id);
      return $Productos;
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
    public function update(RpeoductosRequests $request, productos $Productos)
    {
        $Productos->update($request->all());
     return response()->json('ha sido modificado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $Productos)
    {
        $Productos->delete();
        return response()->json('el registro fue eliminado');
    }
}
