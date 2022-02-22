<!-- Importamos plantilla-->
@extends('plantillas.create')

<!-- Título de la página -->
@section('title', 'superpowers/edit')

<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
<!-- Título de la tabla -->
@section('h1', 'Editar superpoder')

<!-- Formulario-->
@section('content')
    <form action="{{ route('superpowers.update',$superpower) }}" method="POST">

        <!-- Token-->
        @csrf
        @method('put')
        <label class="form-label">
            Descripció
            <input type="text" class="form-control" name="description" value="{{ $superpower->description}}">
        </label>
        <br>
        <input class="btn btn-primary my-5" type="submit" value="Editar">

    </form>
@endsection
