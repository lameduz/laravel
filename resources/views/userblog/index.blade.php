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
            <div class="panel-heading myblogs-title">Derniers articles du blog</div>
                <div class="myblogs-thumbnails">
                    <a href="{{route('blog.index')}}"><img src="img/benz.jpg"></a>
                </div>
                <div class="panel-body myblogs-name">
                    <a href="{{route('blog.index')}}">
                        <span class="myblogs-nametitle">(TUTO) Comment faire un kamehameha</span><br/>
                        <span class="myblogs-descr">Bonjour aujourd'hui on va faire du pain à la semoule...</span>
                    </a>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection