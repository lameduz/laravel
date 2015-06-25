@extends('app')

@section('content')
    @if(Auth::user()->blogs()->count() == 0)
        <div class="col-md-10 col-md-offset-1">
         <div id="no-blog-yet">
             <div class="panel panel-default">
                 <div class="panel-heading">Je suis nul en design</div>
                 <div class="panel-body">
                     <a href="{{route('blog.new')}}">Pas encore de blog ? Créer ton premier blog !</a>
                 </div>
                 <div class="panel-footer">Bonjour Léo change mon apparence stp </div>
             </div>
         </div>
        </div>
    @endif

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