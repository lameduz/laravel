@extends('app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">Profile</div>
            <div class="panel-body">
            {!! Form::model($user, ['route' => 'profiles.edit','id' => $user->id])!!}

                {!! Form::text('username')!!}

                {!! Form::close() !!}


                   {!! Form::model($user->profile, ['route' => 'profiles.edit','id' => $user->id])!!}

                   {!! Form::text('sexe')!!}
                   {!! Form::text('birthdate') !!}

                   {!! Form::close() !!}
            </div>
    </div>





@endsection
