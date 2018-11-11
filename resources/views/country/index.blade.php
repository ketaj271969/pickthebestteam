@extends('layouts.app') @section('content')

<ul>
	@foreach($countries as $country)
	<li><a href="{{route('country.edit', $country->id)}}">{{$country->PTBTCountryName}}</a></li> @endforeach

</ul>


@endsection