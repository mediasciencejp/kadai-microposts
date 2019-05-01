@extends('layouts.app')

@section('content')
    <div class="row">
        <asside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </asside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @include('users.users', ['users' => $users])
        </div>
    </div>
@endsection
