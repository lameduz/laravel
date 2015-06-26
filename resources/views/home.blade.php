@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Bienvenue sur<img src="{{asset('img/bloggus_logo_small.png')}}"></img></h1>
			<h4>Bloggus est une plateforme de génération de blogs destinée à tous.<br/>
				Créez et modifier vos blogs devient un jeu d'enfant graçe à la technologie Bloggus.<br/>
				Visitez des milliers de blogs différents et commentez les !<br/>
				Convaincu(e) ? <a href="{{url('register')}}">Inscrivez-vous maintenant !</a>
			</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default lastblogs">
    			<div class="panel-heading lastblogs-title">Les derniers blogs</div>
				<div class="lastblogs-thumbnails">
        			<a href="#"><img src="#"></a>
   				</div>
    			<div class="panel-body lastblogs-name">
        			<a href="#">
            			<span class="lastblogs-nametitle">izi</span><br/>
            			<span class="lastblogs-descr">izi</span>
        			</a>
    			</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default lastblogs">
    			<div class="panel-heading lastblogs-title">Les derniers articles</div>
				<div class="lastblogs-thumbnails">
        			<a href="#"><img src="#"></a>
   				</div>
    			<div class="panel-body lastblogs-name">
        			<a href="#">
            			<span class="lastblogs-nametitle">izi</span><br/>
            			<span class="lastblogs-descr">izi</span>
        			</a>
    			</div>
			</div>
		</div>
	</div>
</div>
@endsection
