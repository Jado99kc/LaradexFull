@extends('layouts.app')

@section('title','Trainers')

@section('content')
@include('common.success')
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                    <h1 class="display-4">Listado de Trainers</h1>
                </div>
            </div>
        
    
        <button type="button" class="btn btn-light"><a style="text-decoration:none;" href="/trainers/create">Crear Entrenador</a></button>
        </div>
    </div>

    <div class="row">
        
        @foreach ($trainers as $trainer)
    
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 70px; text-align:center">
                    <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px; " src="images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto display-block" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$trainer -> name}}</h5>
                    <p class="card-text">{{$trainer -> description}}</p>
                    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver mas</a>
                </div>
                </div>
            </div>
    
        @endforeach
    </div>   

@endsection

