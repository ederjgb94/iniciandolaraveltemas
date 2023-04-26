<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container">
    <div class="row">
        @foreach ($perros as $perro)
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/80/80?random=@php
echo rand(1, 100); @endphp" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $perro->name }}</h5>
                    <p class="card-text">Tiene la edad de {{ $perro->age }}</p>
                    <a href="#" class="btn btn-success">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        @endforeach
    </div>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
