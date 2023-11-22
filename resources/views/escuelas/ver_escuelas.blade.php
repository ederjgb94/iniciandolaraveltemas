@extends('template')

@section('content')
    <a href="{{ route('escuelas.create') }}" class="btn btn-primary">Crear</a>
    @foreach ($escuelas as $escuela)
        <p>{{ $escuela->id }} {{ $escuela->nombre }}</p>
        {{-- <form action="{{ route('escuelas.destroy', $escuela->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form> --}}
        <a href="{{ route('escuelas.edit', $escuela) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('escuelas.eliminar', $escuela) }}" class="btn btn-danger">Eliminar</a>
    @endforeach
@endsection
