<?php

namespace App\Http\Controllers;
use App\Carrito73;

use Illuminate\Http\Request;

class Carrito73Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view('carrito.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                       return view('carrito.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                               return view('carrito.edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function show(Request $id)
    {
   return view('carrito.show', ['carrito' => Carrito73::findOrFail($id)]); 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito73 $detalles73)
    {
                               return view('carrito.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito73 $detalles73)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalles73  $detalles73
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
}
