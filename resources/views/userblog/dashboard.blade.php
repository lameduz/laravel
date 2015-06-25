@extends('app')

@section('content')


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
                    <a href="#"><img src="{{asset('img/benz.jpg')}}"></a>
                </div>
                <div class="panel-body myblogs-name">
                    <a href="#">
                        <span class="myblogs-nametitle">(TUTO) Comment faire un kamehameha</span><br/>
                        <span class="myblogs-descr">Bonjour aujourd'hui on va faire du pain à la semoule...</span>
                    </a>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection