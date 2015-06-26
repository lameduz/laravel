@extends('app')

@section('content')

<div class="col-md-3 edit-blog-sidebar">
	<h1>{{$blog->title}}</h1>
	<div class="blog-thumbnail">
		<img src="{{asset($blog->image)}}" class="">
	</div>
	<div id="blog-description" class="well well-lg blog-description">
		{{$blog->description}}
	</div>
	<h3>Infos du blog</h3>
	<div class="bloginfos">
		<i class="fa fa-calendar"></i><span class="bloginfos-created-at">créé le <strong>{{$blog->created_at}}</strong></span><br/>
		<i class="fa fa-pencil-square"></i><span class="bloginfos-articles"><strong>{{$blog->posts->count()}}</strong> articles</span><br/>
		<i class="fa fa-comment"></i><span class="bloginfos-commentaires"><strong>8</strong> commentaires</span><br/>
		<i class="fa fa-plus"></i><span class="bloginfos-abonnés"><strong>1 289 345</strong> abonnés</span><br/>


	</div>
</div>
<div class="editblog-last-row">
	<div class="col-md-9">
		@foreach($blog->posts as $post)
		<div class="panel panel-default myarticles">
			<div class="panel-heading myarticles-title">
				<h3 class="media-heading"><a href="{{route('blog.article',['blogid' => $blog->id,'postid' => $post->id])}}">{{$post->title}}</a></h3>
				<span class="date">{{$post->created_at}}</span>
			</div>
			<div class="media">
				<div class="media-left myarticles-thumbnails">
					<a href="{{route('blog.article',['blogid' => $blog->id,'postid' => $post->id])}}"><img src="{{asset($post->image)}}" alt="..."></a>
				</div>
				<div class="media-body blogbody">
					{!! $post->body !!}
				</div>
					<i class="fa fa-comment fa-3x">56</i>
			</div>

		</div>
		@endforeach
	</div>
</div>
</div>

</div>

@endsection