<?php

namespace App\Http\Controllers;

use App\Models\codigos;
use App\Http\Requests\StorecodigosRequest;
use App\Http\Requests\UpdatecodigosRequest;

class CodigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crearcodigo($usuario)
    {
        $codigo_verf = rand(10000, 99999);
        $codigo_verf_2 = rand(10000, 99999);
        $codigo = new codigos;
        $codigo->user_id = intval($usuario);
        $codigo->codigo = $codigo_verf;
        $codigo->codigo_dos = $codigo_verf_2;
        $codigo->save();
        
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
     * @param  \App\Http\Requests\StorecodigosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecodigosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function show(codigos $codigos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function edit(codigos $codigos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecodigosRequest  $request
     * @param  \App\Models\codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecodigosRequest $request, codigos $codigos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\codigos  $codigos
     * @return \Illuminate\Http\Response
     */
    public function destroy(codigos $codigos)
    {
        //
    }
}
