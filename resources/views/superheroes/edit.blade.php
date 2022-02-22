@extends('plantillas.create')

@section('title', 'superheroes/edit')

@section('h1', 'Editar superheroi')

@section('content')
    <form action="{{ route('superheroes.update',$superheroe) }}" method="POST">

        <!-- Token-->
        @csrf
        @method('put')
        <label class="form-label">
            Nom real
            <input type="text" class="form-control" name="realname" value="{{$superheroe->realname}}" >
        </label>
        <label class="form-label">
            Nom heroi
            <input type="text" class="form-control" name="heroname" value="{{$superheroe->heroname}}" >
        </label>
        <label class="form-label">
            Genere
            <select class="form-select" name="gender" >
                <option @if($superheroe->gender == 'male') selected @endif value="male">Male</option>
                <option @if($superheroe->gender == 'female') selected @endif value="female">Female</option>
            </select>
        </label>
        <label class="form-label">
            Planeta
            <select class="form-select" name="planet_id">
                @foreach($planets as $planet)
                    <option @if($superheroe->planet->id == $planet->id) selected @endif value="{{ $planet->id }}">{{ $planet->name }}</option>
                @endforeach
            </select>
        </label>
        <br>
        <input class="btn btn-primary my-5" type="submit" value="Editar">

    </form>
@endsection
