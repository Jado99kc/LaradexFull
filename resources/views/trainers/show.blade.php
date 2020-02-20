@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

    @include('common.success')
    
    <div class="text-center">
    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" src="images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto display-block" alt="...">
    </div>
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p> {{$trainer -> description}} </p>
            <div class="btn-group" role="group">
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
        {!!Form::open(['route'=>['trainers.destroy', $trainer-> slug], 'method' => 'DELETE'])!!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <modal-button style='margin-top: 0px'></modal-button>
    </div>
    </div>
    {{-- modal to popup --}}
    <create-pokemon-modal></create-pokemon-modal>
    <list-of-pokemons></list-of-pokemons>

    
        
@endsection