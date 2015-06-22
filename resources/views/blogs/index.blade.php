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

    <div class="col-md-6">
        <p>Dernier articles postés</p>
    </div>

    <div class="col-md-6">
        <p>Derniers commentaires postés</p>
    </div>

    <div class="col-md-6">
        <p>Dernier qqch postés</p>
    </div>
    <div class="col-md-6">
        <p>Dernier qqch postés</p>
    </div>
@endsection