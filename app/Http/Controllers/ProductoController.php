<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Producto::all();
    }

    public function verTodos()
    {
        return view('productos.ver_productos', ['productos' => Producto::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Forma no masiva
        // $producto = new Producto();
        // $producto->barras = $request->barras;
        // $producto->precio = $request->precio;
        // $producto->save();
        // return $producto;

        // Forma masiva
        return Producto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return $producto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        // actualización no masiva
        // $producto->barras = $request->barras;
        // $producto->precio = $request->precio;
        // $producto->update();
        // return $producto;

        // actualización masiva
        $producto->update($request->all());
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        return $producto->delete();
    }

    public function editar(Producto $producto)
    {
        return view('productos.editar_productos', ['producto' => $producto]);
    }
}
