@extends('template')

@section('content')
    @foreach ($productos as $producto)
        <p>{{ $producto->id }} {{ $producto->barras }}</p>
        {{-- Poner un boton para eliminar --}}
        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        {{-- poner un boton para editar --}}
        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
    @endforeach
@endsection
