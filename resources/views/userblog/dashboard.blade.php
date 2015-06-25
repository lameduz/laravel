@extends('app')

@section('content')

    <div class="col-md-3 edit-blog-sidebar">
        <h1>{{$blog->title}}</h1>
        <div class="blog-thumbnail">
            <img src="{{asset('img/benz.jpg')}}" class="">
        </div>
        <div id="blog-description" class="well well-lg blog-description" contenteditable="true">
            {{$blog->description}}
        </div>
        <div class="edit-tools" style="display: block;">
            <button class="edit-profile-confirm">Modifier</button>
            <meta name="csrf-token" content="ngsiQgBP5rz0SobrxxzVQaN2P94Qd4WSTvaX1SwC">
        </div>
        <h3>Infos du blog</h3>
        <div class="bloginfos">
            <i class="fa fa-calendar"></i><span class="bloginfos-created-at">créé le <strong>{{$blog->created_at}}</strong></span><br/>            
            <i class="fa fa-pencil-square"></i><span class="bloginfos-articles"><strong>12</strong> articles</span><br/>
            <i class="fa fa-comment"></i><span class="bloginfos-commentaires"><strong>8</strong> commentaires</span><br/>
            <i class="fa fa-plus"></i><span class="bloginfos-abonnés"><strong>1 289 345</strong> abonnés</span><br/>


        </div>
    </div>
<div class="editblog-row">
	<div class="col-md-5">
        <a href="{{route('blogs.articles.create',['id' => $id])}}">        
			<button type="button" class="btn btn-default post-article-button">
				<i class="fa fa-pencil-square-o"></i><span>Poster un article</span>
			</button>
        </a>
	</div>
    <div class="col-md-3">
        <a href="{{route('blog.settings')}}">        
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
                    <a href="#"><img src="{{ asset('img/kamehameha.png') }}"></a>
                </div>
                <div class="panel-body myarticles-name">
                    <a href="#">
                        <span class="myarticles-article-title">(TUTO) Comment faire un kamehameha</span><br/>
                        <span class="myarticles-article-descr">Bonjour aujourd'hui on va faire du pain à la semoule...</span>
                    </a>
                    <br/><a href="#" class="modify-link"><i class="fa fa-pencil fa-2x"></i>MODIFIER</a>
                </div>
            </div>
        </div>
	</div>

</div>


@endsection