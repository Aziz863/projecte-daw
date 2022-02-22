<!-- Importamos plantilla-->
@extends('plantillas.show')

<!-- Título de la página -->
@section('title', 'superpowers')

<!-- Título de la tabla -->
@section('h1')
    {{ $superpower->description }}
@endsection

<!-- Listar los elementos del fabricante -->
@section('lista')
    <li class="list-group-item"> <strong>ID</strong><br> {{ $superpower->id }}</li>
    <li class="list-group-item"> <strong>DESCRIPCIÓ</strong><br> {{ $superpower->description }}</li>
    <li class="list-group-item">
        <strong>SUPERHEROIS AMB AQUEST PODER</strong><br>
            @foreach($superpower->superheroes as $superhero)
                    {{ $superhero->heroname }}<br>
            @endforeach
    </li>
@endsection
