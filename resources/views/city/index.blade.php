@extends('layouts.app') @section('content')

<ul>
	@foreach($cities as $city)
	<li><a href="{{route('city.edit', $city->id)}}">{{$city->PTBTCity}}</a></li> @endforeach

</ul>


@endsection