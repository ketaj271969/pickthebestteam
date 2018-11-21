@extends('layouts.app') 

@section('content')

<h1><a href="{{route('region.edit', $cities->id)}}">{{$cities->PTBTCity}}</a></h1>


@endsection