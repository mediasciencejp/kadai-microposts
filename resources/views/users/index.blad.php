@extends('layouts.app')

@section('content')
    @indclud('users.users', ['users', => $users])
@endsection
