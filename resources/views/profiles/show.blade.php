@extends('layouts.master')

@section('content')

    <h1>Profile</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $profile->id }}</td><td>{{ $profile->name }}</td>
            </tr>
        </table>
    </div>

@endsection
