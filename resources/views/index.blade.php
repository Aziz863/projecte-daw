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
    <title class="text-primary">index</title>
</head>
<body>
<h1 class="text-center my-3">Inici</h1>

<div class="d-flex gap-2 row justify-content-center">
    <div class="card w-50">
        <div class="card-body mx-auto">
            <a href="{{ route('superheroes.index') }}">Superherois</a>
        </div>
    </div>

    <div class="card w-50">
        <div class="card-body mx-auto">
            <a href="{{ route('superpowers.index') }}">Superpoders</a>
        </div>
    </div>

    <div class="card w-50">
        <div class="card-body mx-auto">
            <a href="{{ route('planets.index') }}">Planetes</a>
        </div>
    </div>
</div>

</body>
</html>
