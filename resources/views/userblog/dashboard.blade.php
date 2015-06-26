@extends('app')

@section('content')
<div class="background" style="background-image: url({{asset($blogs->background)}})">
    <div class="col-md-3 edit-blog-sidebar">
        <h1>{{$blogs->title}}</h1>
        <div class="blog-thumbnail">
            <img src="{{asset($blogs->image)}}" class="">
        </div>
        <div id="blog-description" class="well well-lg blog-description" contenteditable="true">
            {{$blogs->description}}
        </div>
        <div class="edit-tools" style="display: block;">
            <button class="edit-profile-confirm">Modifier</button>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        </div>
        <h3>Infos du blog</h3>
        <div class="bloginfos">
            <i class="fa fa-calendar"></i><span class="bloginfos-created-at">créé le <strong>{{$blogs->created_at}}</strong></span><br/>
            <i class="fa fa-pencil-square"></i><span class="bloginfos-articles"><strong>{{$blogs->posts->count()}}</strong> articles</span><br/>
            <i class="fa fa-comment"></i><span class="bloginfos-commentaires"><strong>8</strong> commentaires</span><br/>
            <i class="fa fa-plus"></i><span class="bloginfos-abonnés"><strong>1 289 345</strong> abonnés</span><br/>


        </div>
    </div>
    <div class="editblog-row">
	   <div class="col-md-3">
            <a href="{{route('blogs.articles.create',['id' => $id])}}">        
			 <button type="button" class="btn btn-default post-article-button">
			     <i class="fa fa-pencil-square-o"></i><span>Poster un article</span>
			 </button>
            </a>
	   </div>
        <div class="col-md-3">
            <a href="{{route('blog.settings',['id' => $blogs->id])}}">
                <button type="button" class="btn btn-default blog-settings-button">
                    <i class="fa fa-cog"></i><span>Modifier le blog</span>
                </button>
            </a>
        </div>
    </div>

    <div class="editblog-last-row">
	   <div class="col-md-9">
	       <div class="panel panel-default myarticles">
             <div class="panel-heading myarticles-title">Mes articles</div>
                <div class="myarticles-thumbnails">


                </div>

             @foreach($blogs->posts as $post)
                     <div class="media">
                         <div class="media-left myarticles-thumbnails">
                                 <img src="{{asset($post->image)}}" alt="...">

                         </div>
                         <div class="media-body">
                             <h4 class="media-heading"><a href="{{route('blog.article',['blogid' => $blogs->id,'postid' => $post->id])}}">{{$post->title}}</a></h4>
                             {!! $post->body !!}
                         </div>
                     </div>
                 <br/><a href="{{route('blogs.article.edit',['blogid' => $blogs->id,'id' => $post->id])}}" class="modify-link"><i class="fa fa-pencil fa-2x"></i>MODIFIER</a>
                 <p class="divizeur"></p>
             @endforeach
                </div>
            </div>
        </div>
	</div>
</div>



@endsection