@extends('layouts.app') @section('content')

    <h1>Venues Maintenance screen</h1>

    <ul>
        @foreach($venues as $venue)
           <li><a href="{{route('venues.edit', $venue->id)}}">{{$venue->PTBTVenueName}} {{$venue->PTBTAddress}} {{$venue->PTBTZip}}</a></li> @endforeach

    </ul>


@endsection