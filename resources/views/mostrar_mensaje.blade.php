@extends('template')

@section('content')
    <p> {{ $mensaje }} </p>
    <a href="{{ route($ruta) }}" class="btn btn-primary">Regresar</a>
@endsection
