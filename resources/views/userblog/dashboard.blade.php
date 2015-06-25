@extends('app')

@section('content')

    <div class="col-md-3 edit-blog-sidebar">
        <h1>{{$blog->title}}</h1>
        <div class="blog-thumbnail">
            <img src="{{asset('img/benz.jpg')}}" class="">
        </div>
        <h3>Infos du blog</h3>
        <div class="bloginfos">
            <span class="bloginfos-created-at">créé le <strong>{{$blog->created_at}}</strong></span><br/>            
            <span class="bloginfos-articles"><strong>12</strong> articles</span><br/>
            <span class="bloginfos-commentaires"><strong>8</strong> commentaires</span><br/>


        </div>
    </div>
<div class="editblog-row">
	<div class="col-md-8">
            <a href="{{route('blogs.articles.create',['id' => $id])}}">        
			<button onclick="location.href='#'" type="button" class="btn btn-default post-article-button" href="#">
				<i class="fa fa-pencil-square-o"></i><span>Poster un article</span>
			</button>
            </a>
	</div>
</div>

<div class="editblog-last-row">
	<div class="col-md-9">
		 <div class="panel panel-default myblogs">
            <div class="panel-heading myblogs-title">Mes articles</div>
                <div class="myblogs-thumbnails">
                    <a href="#"><img src="{{ asset('img/kamehameha.png') }}"></a>
                </div>
                <div class="panel-body myblogs-name">
                    <a href="#">
                        <span class="myblogs-article-title">(TUTO) Comment faire un kamehameha</span><br/>
                        <span class="myblogs-article-descr">Bonjour aujourd'hui on va faire du pain à la semoule...</span>
                    </a>
                    <br/><a href="#" class="modify-link"><i class="fa fa-pencil fa-2x"></i>MODIFIER</a>
                </div>
            </div>
        </div>
	</div>

</div>


@endsection