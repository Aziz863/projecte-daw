{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>form</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Nou planeta</h1>--}}
{{--<a href="{{ route('planets.index') }}"> Tornar</a>--}}
{{--<br><br>--}}
{{--<form action="{{ url("planets/store") }}" method="POST">--}}
{{--    @csrf--}}
{{--    <label for="name">Nom</label>--}}
{{--    <input type="text" name="name">--}}
{{--  <button type="submit">Crear </button>--}}
{{--</form>--}}


{{--</body>--}}
{{--</html>--}}
<!-- Importamos plantilla-->
@extends('plantillas.create')

<!-- Título de la página -->
@section('title', 'planets/new')

<!-- Título de la tabla -->
@section('h1', 'Nou planeta')

<!-- Formulario-->
@section('content')
    <form action="{{ route('planets.store') }}" method="POST">

        <!-- Token-->
        @csrf

        <label class="form-label">
            Nom
            <input type="text" class="form-control" name="name">
        </label>
        <br>
        <input class="btn btn-primary my-5" type="submit" value="Crear">

    </form>
@endsection
<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
