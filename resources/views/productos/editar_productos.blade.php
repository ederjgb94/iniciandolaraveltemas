@extends('template')

@section('content')
    {{-- formulario para editar --}}
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="barras" class="form-label">Codigo de barras</label>
            <input type="text" class="form-control" id="barras" name="barras" value="{{ $producto->barras }}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    @endsection
