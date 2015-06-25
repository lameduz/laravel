@extends('app')

@section('content')
<div class="col-md-8">
    <a href="{{route('blogs.new')}}">     
        <button type="button" class="btn btn-default new-blog-button">
            <i class="fa fa-plus"></i><span> Créer un blog</span>
        </button>
    </a>
</div>



<div class="panel panel-default myblogs">
    <div class="panel-heading myblogs-title">Mes blogs</div>
    <div class="myblogs-thumbnails">
        <a href="{{route('blogs.index')}}"><img src="img/benz.jpg"></a>
    </div>
    @foreach($blogs as $blog)
    <div class="panel-body myblogs-name">
        <a href="{{route('blog.dashboard',['id' => $blog->id])}}">
            <span class="myblogs-nametitle">{{$blog->title}}</span><br/>
            <span class="myblogs-descr">{{$blog->description}}</span>
        </a>
    </div>
    @endforeach
</div>
</div>

@endsection