<div class="form-group">
    {!!Form::label('name','Nombre')!!}
    {!!Form::text('name',null,['class'=> 'form-control col-sm-3'])!!}
    {{-- slug --}}
    {!!Form::label('slug','Slug')!!}
    {!!Form::text('slug',null,['class'=> 'form-control col-sm-3'])!!}
    {{-- //file --}}
    <div class="form-group">
    {!!Form::label('avatar','Avatar')!!}
    {!!Form::file('avatar',null,['class'=> ''])!!}
    </div>
    <div class="form-group">
        {!!Form::label('description','Description')!!}
        {!!Form::text('description',null,['class'=> 'form-control col-sm-6'])!!}
        </div>