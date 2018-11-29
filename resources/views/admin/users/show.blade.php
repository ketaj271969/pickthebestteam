@extends('layouts.app')

@section('content')

    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user') }}</p>
    @endif

    <h1>Users</h1>

    <h2>Show Users</h2>
@stop