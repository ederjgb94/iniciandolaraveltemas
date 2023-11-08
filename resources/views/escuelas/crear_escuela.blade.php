@extends('template')

@section('content')
    <form action="{{ route('escuelas.crear') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la escuela</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="">
        </div>
        <div class="mb-3">
            <label for="cp" class="form-label">CP</label>
            <input type="text" class="form-control" id="cp" name="codigopostal" value="">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
