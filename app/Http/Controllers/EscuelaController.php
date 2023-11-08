<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Models\Alumno;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escuela = Escuela::create($request->all());
        return view('mostrar_mensaje', [
            'mensaje' => 'Escuela creada correctamente ' . $escuela->nombre,
            'ruta' => 'escuelas.index',
        ],);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function show(Escuela $escuela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuela $escuela)
    {
        $escuela->update($request->all());
        return view('mostrar_mensaje', [
            'mensaje' => 'Escuela actualizada correctamente ' . $escuela->nombre,
            'ruta' => 'escuelas.index',
        ],);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuela $escuela)
    {
        //
    }

    public function alumnos(Escuela $escuela)
    {
        return $escuela->alumnos;
    }

    public function guardarAlumno(Escuela $escuela, Alumno $alumno)
    {
        $escuela->alumnos()->syncWithoutDetaching([1, 2, 3]);
        return $escuela->alumnos;
    }

    public function verEscuelas()
    {
        return View('escuelas.ver_escuelas', [
            'escuelas' => Escuela::all(),
            'mensaje' => 'Hola desde el controlador',
        ],);
    }

    public function editar(Escuela $escuela)
    {
        return View('escuelas.editar_escuela', [
            'escuela' => $escuela,

        ],);
    }

    public function create()
    {
        return View('escuelas.crear_escuela');
    }
}
