@extends('app')

@section('content')
    {!! Form::model($user, ['route' => 'profiles.edit','id' => $user->id])!!}

    {!! Form::text('username')!!}

    {!! Form::close() !!}
    {!! Form::model($user->profile, ['route' => 'profiles.edit','id' => $user->id])!!}

       {!! Form::text('sexe')!!}
       {!! Form::text('birthdate') !!}

       {!! Form::close() !!}



@endsection
