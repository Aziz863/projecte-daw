<!-- Importamos plantilla-->
@extends('plantillas.plantilla')

<!-- Título de la página -->
@section('title', 'planets')

<!-- Título de la tabla -->
@section('h1', 'PLANETES')

@section('content')

@if (session('status'))
    <div>
        {{ session('status') }}
    </div>
    <br>
@endif

<a href="{{ route('planets.create') }}">Nou planeta</a>
<br><br>
<table border="1" cellspacing="0" cellpadding="5" class="d-flex gap-1 table-hover">
    <th>Codi</th>
    <th>Nom</th>
    <th>Operacións</th>
    @foreach($planetes as $planeta)
        <tr>
            <td>{{ $planeta->id }}</td>
            <td>{{ $planeta->name }}</td>
            {{--            <td><a href="planets/delete/{{ $planeta->id }}">Esborrar</a></td>--}}
{{--            <td><a href="{{ url("planets/delete", $planeta->id ) }}">Esborrar</a></td>--}}
            <td>
                <a href="{{ route('planets.show',$planeta->id) }}">Mostrar</a>
                <a href="{{ route('planets.destroy',$planeta->id) }}">Esborrar</a>
                <a href="{{ route('planets.edit',$planeta->id) }}">Actualitzar</a>
            </td>
        </tr>
    @endforeach
</table>
<br>
<div>
    {{ $planetes->links('pagination::bootstrap-4') }}
</div>
@endsection
