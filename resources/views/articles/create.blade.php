@extends('app')

@section('content')


<div id="post-container">
    {!! Form::open(['route' => ['blogs.article.new', 'id' => $id],'id' => 'form-post-img','name'=>'img-upload','files' => true,'method' => 'POST']) !!}
    {!! Form::label('title','Titre de ton article') !!}
    {!! Form::text('title',null,['class'=> 'form-control']) !!}
    {!! Form::label('image','Ajoute une image') !!}
    {!! Form::file('image',null,['class'=> 'form-control']) !!}
    <textarea name="body" class="ckeditor"></textarea>


    {!! Form::submit('Poster mon article')!!}
    {!! Form::close() !!}


</div>



@endsection