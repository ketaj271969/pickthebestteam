@extends('layouts.app')

@section('content')
    <h1>Edit City</h1>
    <form method = "post" action="/admin/cities/{{$cities->id}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        {{App\PtbtRegion::find($cities->PTBTRegionId)->PTBTRegionName}}
        <br>
        {{App\PtbtCountry::find($cities->PTBTCountryId)->PTBTCountryName}}
        <br>
        {{App\PtbtStProv::find($cities->PTBTStProvId)->PTBTStProvName}}
        <br>
        <input type="text" name="PTBTCity" placeholder="Enter City" value="{{$cities->PTBTCity}}">
        <input type="submit" name="submit" value="UPDATE">

    </form>
    <form method="post" action="/admin/cities/{{$cities->id}}">
        {{ csrf_field() }}
        <input type = "hidden" name="_method" value="DELETE">
        <input type = "submit" value="DELETE">
    </form>
@endsection