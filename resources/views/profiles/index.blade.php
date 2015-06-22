@extends('app')

@section('content')


    <div class="col-md-2">
        <div class="current-profile-pic">
            <img src="{{$user->profile->profilepic}}" id="profile-pic">
        </div>
        <div class="new-profile-pic">
            {!! Form::open(['route' => 'profiles.new.pic','method' => 'POST','class' => 'form-ajax-profile-pic','files' => true]) !!}
                <input type="file" name="new-profile-pic" id="new-pic">
                <input type="submit" value="Changer de photo!">
            {!! Form::close() !!}
        </div>
        <p>Proutorut</p>
        <div class="well well-lg" id="profile-description">
           {{$user->profile->description}}
        </div>
    </div>
    <div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
            <div class="panel-body">
            {!! Form::model($user, ['route' => 'profiles.edit','id' => $user->id])!!}
                <div class="form-group">
                {!! Form::label('username','Nom d\'utilisateur') !!}
                {!! Form::text('username',null,['class' => 'form-control'])!!}
                {!! Form::label('email','Adresse électronique')!!}
                {!! Form::text('email',null,['class' => 'form-control'])!!}
                </div>
                {!! Form::close() !!}


                   {!! Form::model($user->profile, ['route' => 'profiles.edit','id' => $user->id])!!}
                  <div class="form-group">
                    {!! Form::label('sexe','Sexe') !!}
                   {!! Form::text('sexe',null,['class' => 'form-control'])!!}
                    {!! Form::label('birthdate','Date de naissance') !!}
                   {!! Form::text('birthdate',null,['class' => 'form-control']) !!}
                  </div>
                   {!! Form::close() !!}
            </div>
    </div>


    </div>


@endsection
