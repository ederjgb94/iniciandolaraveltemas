@extends('template')

@section('content')
    <form action="{{ route('escuelas.update', $escuela) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la escuela</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $escuela->nombre }}">
        </div>
        <div class="mb-3">
            <label for="cp" class="form-label">CP</label>
            <input type="text" class="form-control" id="cp" name="codigopostal"
                value="{{ $escuela->codigopostal }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
