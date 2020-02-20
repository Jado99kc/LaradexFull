@extends('layouts.app')

@section('title','Trainers Create')

@section('content')
    @include('common.errors')
    {!!Form::open(['route'=> 'trainers.store', 'method' => 'POST', 'files' => true])!!}
    @include('trainers.form')
    {!!Form::submit('Guardar',['class'=> 'btn btn-primary'])!!}

</div>
{!!Form::close()!!}
{{-- <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" name="name" class="form-control col-sm-3">
    <br>
    <label for="avatar">Avatar</label>
    <input type="file" name="avatar" class="">
    <br>
    <label for="description">Descripcion</label>
    <input type="text" name="description" class="form-control col-sm-6">
</div>
<button type="submit" class="btn btn-primary"> Guardar</button>
</form> --}}
@endsection

