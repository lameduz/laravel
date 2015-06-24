@extends('app')

@section('content')
    <div class="col-md-5">
    <div class="form-group">

    {!! Form::open(['route' => 'blog.store']) !!}
    {!! Form::label('subdomain','Choisi un nom') !!}
    {!! Form::text('subdomain',null,['class'=>'form-control']) !!}
    {!! Form::label('title','Donne un titre à ton blog') !!}
    {!! Form::text('title',null,['class' => 'form-control'])!!}
    {!! Form::label('description','Description') !!}
    {!! Form::text('description',null,['class'=> 'form-control']) !!}
        {!! Form::submit('Créer mon blog!',['class' => 'button btn-default']) !!}
        {!! Form::close() !!}
    </div>
    </div>
@endsection