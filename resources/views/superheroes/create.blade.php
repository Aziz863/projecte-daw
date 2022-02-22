@extends('plantillas.create')

@section('title', 'superheroes/new')

@section('h1', 'Nou superheroi')

@section('content')
    <form action="{{ route('superheroes.store') }}" method="POST">

        <!-- Token-->
        @csrf

        <label class="form-label">
            Nom real
            <input type="text" class="form-control" name="realname">
        </label>
        <label class="form-label">
            Nom heroi
            <input type="text" class="form-control" name="heroname">
        </label>
        <label class="form-label">
            Genere
            <select class="form-select" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </label>
        <label class="form-label">
            Planeta
            <select class="form-select" name="planet_id">
                @foreach($planets as $planet)
                    <option value="{{ $planet->id }}">{{ $planet->name }}</option>
                @endforeach
            </select>
        </label>
        <br>
        <input class="btn btn-primary my-5" type="submit" value="Crear">

    </form>
@endsection
