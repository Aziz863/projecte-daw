@extends('plantillas.show')

@section('title', 'planets')

@section('h1')
    {{ $planet->name }}
@endsection

@section('lista')
    <li class="list-group-item"> <strong>ID</strong><br> {{ $planet->id }}</li>
    <li class="list-group-item"> <strong>NOM</strong><br> {{ $planet->name }}</li>
    <li class="list-group-item"> <strong>SUPERHEROIS</strong><br>
{{--        {{ dd($planet->superheroe)}}--}}
        @foreach( $planet->superheroe as $superhero )
            {{ $superhero->heroname }}<br>
        @endforeach
    </li>
@endsection
