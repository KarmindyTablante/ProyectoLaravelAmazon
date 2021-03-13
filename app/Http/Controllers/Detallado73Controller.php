<?php

namespace App\Http\Controllers;

use App\Detallado73;
use Illuminate\Http\Request;

class Detallado73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view('detallado.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                       return view('detallado.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                               return view('detallado.edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function show(Detallado73 $detallado73)
    {
                               return view('detallado.edit');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function edit(Detallado73 $detallado73)
    {
                               return view('detallado.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detallado73 $detallado73)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detallado73 $detallado73)
    {
        //
    }
}
