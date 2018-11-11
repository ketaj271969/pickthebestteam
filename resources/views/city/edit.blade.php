@extends('layouts.app')

@section('content')
<h1>Edit City</h1>
<form method = "post" action="/city/{{$cities->id}}">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<input type="text" name="PTBTRegionId" placeholder="Enter PTBTRegionId" value="{{$cities->PTBTRegionId}}">
<input type="text" name="PTBTCountryId" placeholder="Enter PTBTCountryId" value="{{$cities->PTBTCountryId}}">
<input type="text" name="PTBTStProvId" placeholder="Enter PTBTStProvId" value="{{$cities->PTBTStProvId}}">
<input type="text" name="PTBTCity" placeholder="Enter City" value="{{$cities->PTBTCity}}">
<input type="submit" name="submit" value="UPDATE">

</form>
<form method="post" action="/city/{{$cities->id}}">
{{ csrf_field() }}
<input type = "hidden" name="_method" value="DELETE">
<input type = "submit" value="DELETE">
</form>
@endsection