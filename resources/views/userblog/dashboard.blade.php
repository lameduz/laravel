@extends('app')

@section('content')
<!-- <div class="col-md-3 blog-sidebar">
	<a href="{{route('blog.index')}}"><img src="img/benz.jpg" class="blog-image"></a>
	<p class="blog-title"><a href="{{route('blog.index')}}">BLABLABLA</a></p>
	<p class="blog-author">un blog de <a href="{{route('blog.index')}}">TEUFTEUF</a></p>
</div> -->

<div class="row editblog-row">
	<div class="col-md-8">
			<button onclick="location.href='#'" type="button" class="btn btn-default post-article-button" href="#">
				<i class="fa fa-pencil-square-o"></i><span>Poster un article</span>
			</button>
	</div>
</div>
<div class="row editblog-last-row">
	<div class="col-md-9">
		 <div class="panel panel-default myblogs">
            <div class="panel-heading myblogs-title">Mes articles</div>
                <div class="myblogs-thumbnails">
                    <a href="#"><img src="img/benz.jpg"></a>
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
    <div class="col-md-3 edit-blog-sidebar">

    </div>
</div>
@endsection