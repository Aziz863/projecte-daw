@extends('plantillas.create')

@section('title', 'superpowers/new')

@section('h1', 'Nou superpoder')

@section('content')
    <form action="{{ route('superpowers.store') }}" method="POST">

        <!-- Token-->
        @csrf

        <label class="form-label">
            Descripció
            <input type="text" class="form-control" name="description">
        </label>
        <br>
        <input class="btn btn-primary my-5" type="submit" value="Crear">

    </form>
@endsection
