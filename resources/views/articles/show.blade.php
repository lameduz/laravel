@extends('app')


@section('content')
    <div class="col-md-5">
    <span>{{$post->title}}</span>
    <span><img class="img-thumbnail" src="{{asset($post->image)}}"></span>
    <span>{!!$post->body!!}</span>
    </div>
    <div class="col-md-6">
        <h1>Commentaires</h1>
        {!! Form::open(['route' => ['blog.article.comment','blogid' => $blogid,'postid'=> $post->id],'id' => 'add-comment-form'])!!}
        {!! Form::text('body')!!}
        {!! Form::submit('Go',['class' => 'add-comment-btn'])!!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Commentaires</div>
        @foreach($post->comments as $comment)
                <div class="panel-body">
                    {{$comment->author}}
                    <p>{{$comment->body}}</p>
                    <p>{{$comment->created_at}}</p>
                </div>
        @endforeach
        <div class="panel-footer">Footer comt</div>
    </div>
@endsection