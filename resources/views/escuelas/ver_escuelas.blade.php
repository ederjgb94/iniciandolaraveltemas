@extends('template')

@section('content')
    @foreach ($escuelas as $escuela)
        <p>{{ $escuela->id }} {{ $escuela->nombre }}</p>
        {{-- <form action="{{ route('escuelas.destroy', $escuela->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form> --}}
        <a href="{{ route('escuelas.edit', $escuela) }}" class="btn btn-warning">Editar</a>
    @endforeach
@endsection
