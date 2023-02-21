<?php

namespace App\Http\Controllers;

use App\Models\Trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Completar el código utilizando paginación
        return Trailer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trailer = new Trailer();
        $trailer->dimension = $request->dimension;
        $trailer->peso = $request->peso;
        $trailer->save();
        return $trailer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function show(Trailer $trailer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trailer $trailer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trailer $trailer)
    {
        //
    }
}
