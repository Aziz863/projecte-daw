<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title class="text-primary">@yield('title')</title>
</head>

<body>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="{{ url()->previous() }}"><i class="bi bi-arrow-left h4"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}"><i class="bi bi-house-door-fill h4"></i></a>
    </li>
</ul>

<ul class="nav justify-content-center gap-5">
    <li class="nav-item">
        <a href="{{ route('superheroes.index') }}">Superherois</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('superpowers.index') }}">Superpoders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('planets.index') }}">Planetes</a>
    </li>
</ul>

<h1 class="text-center my-4">@yield('h1')</h1>
<ul class="list-group list-group-flush text-center w-25 mx-auto">
    @yield('lista')
</ul>

</body>

</html>
