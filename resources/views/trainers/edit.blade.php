@extends('layouts.app')

@section('title', 'Trainer Edit')
    
@section('content')

    {!!Form::model($trainer,['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
    @include('trainers.form')
    {!!Form::submit('Actualizar',['class'=> 'btn btn-primary'])!!}

</div>
{!!Form::close()!!}

{{-- <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
   @method('PUT')
    @csrf
<div class="form-group">
    <label for="Nombre">Nombre</label>
<input type="text" name="name" value="{{$trainer->name}}" class="form-control col-sm-3">
    <br>
    <label for="avatar">Avatar</label>
    <input type="file" name="avatar" class="">
    <br>
    <label for="description">Descripcion</label>
    <input type="text" value="{{$trainer->description}}" name="description" class="form-control col-sm-6">
</div>
<button type="submit" class="btn btn-primary"> Actualizar</button>
</form> --}}
@endsection