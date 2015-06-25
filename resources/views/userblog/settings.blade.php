@extends('app')

@section('content')

        <div class="blog-thumbnail">
            <img src="{{asset('img/benz.jpg')}}" class="">
        </div>
        <div class="new-profile-pic">
                    {!! Form::open(['route' => 'profiles.new.pic','method' => 'POST','class' => 'form-ajax-profile-pic','files' => true]) !!}
                    <input type="file" name="new-profile-pic" id="new-pic">
                    <input type="submit" value="Changer de photo!">
                    {!! Form::close() !!}
        </div>

@endsection