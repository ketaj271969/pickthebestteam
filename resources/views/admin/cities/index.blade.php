@extends('layouts.app') @section('content')

<h1>Cities Maintenance screen</h1>

<ul>
	@foreach($cities as $city)
	<li><a href="{{route('cities.edit', $city->id)}}">{{$city->PTBTCity}}</a></li> @endforeach

</ul>


@endsection