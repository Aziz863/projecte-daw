@extends('plantillas.plantilla')

@section('title', 'superheroes')

@section('h1', 'SUPERHEROIS')

@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
        <br>
    @endif
<a href="{{ route('superheroes.create') }}">Nou superheroi</a>
<br><br>
<table border="1" cellspacing="0" cellpadding="5" class="table table-striped table-hover">
    <th>Codi</th>
    <th>Nom real</th>
    <th>Nom heroi</th>
    <th>Genere</th>
    <th>Planeta</th>
    <th>Operacións</th>
    @foreach($superheroes as $superheroe)
        <tr>
            <td>{{ $superheroe->id }}</td>
            <td>{{ $superheroe->realname }}</td>
            <td>{{ $superheroe->heroname }}</td>
            <td>{{ $superheroe->gender }}</td>
            <td>{{ $superheroe->planet->name }}</td>
            {{--            <td><a href="planets/delete/{{ $planeta->id }}">Esborrar</a></td>--}}
{{--            <td><a href="{{ url("planets/delete", $planeta->id ) }}">Esborrar</a></td>--}}
            <td class="d-flex gap-1">
                <button><a href="{{ route('superheroes.show',$superheroe->id) }}"><i class="bi bi-eye-fill"></i></a></button>
                <form action="{{ route('superheroes.destroy',$superheroe->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"><i class="bi bi-trash-fill text-danger"></i></button>
                </form>
                <button><a href="{{ route('superheroes.edit',$superheroe->id) }}"> <i class="bi bi-pencil-fill text-secondary"></i></a></button>
            </td>
        </tr>
    @endforeach
</table>
<br>
<div>
    {{ $superheroes->links('pagination::default') }}
</div>
@endsection

