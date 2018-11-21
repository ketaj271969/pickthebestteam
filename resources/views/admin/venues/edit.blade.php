@extends('layouts.app')

@section('content')
<h1>Edit Venue</h1>
<form method = "post" action="/admin/venues/{{$venues->id}}">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<input type="text" name="PTBTCityId" placeholder="Enter PTBTCityId" value="{{$venues->PTBTCityId}}">
<input type="text" name="PTBTVenueName" placeholder="Enter PTBTVenueName" value="{{$venues->PTBTVenueName}}">
<input type="text" name="PTBTAddress" placeholder="Enter PTBTAddress" value="{{$venues->PTBTAddress}}">
<input type="text" name="PTBTZip" placeholder="Enter Zip" value="{{$venues->PTBTZip}}">
<input type="text" name="PTBTLocationNote" placeholder="Enter Location Notes" value="{{$venues->PTBTLocationNote}}">
<input type="submit" name="submit" value="UPDATE">

</form>
<form method="post" action="/admin/venues/{{$venues->id}}">
{{ csrf_field() }}
<input type = "hidden" name="_method" value="DELETE">
<input type = "submit" value="DELETE">
</form>
@endsection