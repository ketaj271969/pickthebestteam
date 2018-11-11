@extends('layouts.app') @section('content')

<ul>
	@foreach($regions as $region)
	<li><a href="{{route('region.edit', $region->id)}}">{{$region->PTBTRegionCode}} {{$region->PTBTRegionName}}</a></li> @endforeach

</ul>


@endsection