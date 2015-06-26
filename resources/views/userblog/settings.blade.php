@extends('app')

@section('content')
	<div class="col-md-6">

			<div class="panel panel-default">
				<div class="panel-heading"><h2>Modifier l'image du blog</h2></div>
  				<div class="panel-body panelsettings">

					<img src="{{asset($blog->image)}}" class="">
					<div class="new-blog-pic">
						{!! Form::open(['route' => 'profiles.new.pic','method' => 'POST','class' => 'form-ajax-profile-pic','files' => true]) !!}
						<input type="file" name="new-profile-pic" id="new-pic">
						<input type="submit" value="Changer de photo!">
						{!! Form::close() !!}
					</div>
				</div>
			</div>
	</div>
	<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Modifier le titre du blog</h2></div>
  				<div class="panel-body panelsettings">
					<div id="blog-title" class="well blog-title" contenteditable="true">
						{{$blog->title}}
					</div>
					<div class="edit-tools" style="display: block;">
						<button class="edit-title-confirm">Modifier</button>
						<meta name="csrf-token" content="{{ csrf_token() }}">
					</div>
				</div>
			</div>
	</div>

	<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Modifier l'arrière-plan du blog</h2></div>
  				<div class="panel-body panelsettings">
  					<img src="{{asset($blog->background)}}" class="">
					<div class="new-blog-pic">
						{!! Form::open(['route' => 'profiles.new.pic','method' => 'POST','class' => 'form-ajax-profile-pic','files' => true]) !!}
						<input type="file" name="new-profile-pic" id="new-pic">
						<input type="submit" value="Changer l'arrière-plan!">
						{!! Form::close() !!}
					</div>
				</div>
			</div>
	</div>

	<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><h2>Modifier la couleur des articles</h2></div>
  				<div class="panel-body panelsettings">
  					<input type="color" name="">
					<div class="new-blog-pic">
						<input type="submit" value="Changer de couleur!">
					</div>
				</div>
			</div>
	</div>

@endsection