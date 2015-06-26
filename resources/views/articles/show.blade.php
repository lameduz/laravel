@extends('app')


@section('content')
    <div class="col-md-5">
    <span>{{$post->title}}</span>
    <span><img class="img-thumbnail" src="{{asset($post->image)}}"></span>
    <span>{!!$post->body!!}</span>
    </div>
    <div class="col-md-6">
        <h1>Commentaires</h1>
        {!! Form::open(['route' => 'blog.article.comment','id' => $blog->id]])!!}
        {!! Form::text('body')!!}
        {!! Form::submit('Go')!!}
        {!! Form::close() !!}
    </div>
@endsection