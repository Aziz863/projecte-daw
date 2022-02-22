<!-- Importamos plantilla-->
@extends('plantillas.plantilla')

<!-- Título de la página -->
@section('title', 'superpowers')

<!-- Título de la tabla -->
@section('h1', 'SUPERPODERS')

@section('content')
@if (session('status'))
    <div>
        {{ session('status') }}
    </div>
    <br>
@endif

<a href="{{ route('superpowers.create') }}">Nou superpoder</a>
<br><br>
<table border="1" cellspacing="0" cellpadding="5" class="table table-striped table-hover">
    <th>Codi</th>
    <th>Descripció</th>
    <th>Operacións</th>

    @foreach($superpowers as $superpower)
        <tr>
            <td>{{ $superpower->id }}</td>
            <td>{{ $superpower->description }}</td>
            <td class="d-flex gap-1">
                <button>  <a href="{{ route('superpowers.show',$superpower->id) }}"><i class="bi bi-eye-fill"></i></a></button>
                <form action="{{ route('superpowers.destroy',$superpower->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"><i class="bi bi-trash-fill text-danger"></i></button>
                </form>
                <button><a href="{{ route('superpowers.edit',$superpower->id) }}"><i class="bi bi-pencil-fill text-secondary"></i></a></button>
            </td>
        </tr>
    @endforeach
</table>
<br>
<div>
    {{ $superpowers->links('pagination::bootstrap-4') }}
</div>
@endsection
