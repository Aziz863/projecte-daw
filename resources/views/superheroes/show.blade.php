@extends('plantillas.show')

@section('title', 'superheroes')

@section('h1')
    {{ $superheroe->heroname }}
@endsection

@section('lista')
    <li class="list-group-item"> <strong>ID</strong> <br>{{ $superheroe->id }}</li>
    <li class="list-group-item"> <strong>NOM REAL</strong> <br>{{ $superheroe->realname }}</li>
    <li class="list-group-item"> <strong>NOM HEROI</strong> <br>{{ $superheroe->heroname }}</li>
    <li class="list-group-item"> <strong>GENERE</strong> <br>{{ $superheroe->gender }}</li>
    <li class="list-group-item"> <strong>PLANETA</strong> <br>{{ $superheroe->planet->name }}</li>
    @if($superheroe->superpowers->count() > 0 )
    <li class="list-group-item"> <strong>SUPERPODERS</strong><br>
            @foreach($superheroe->superpowers as $superpower)
            {{ $superpower->description }}<br>
            @endforeach
    </li>
    @endif
@endsection
