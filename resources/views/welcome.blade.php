@extends('layouts/master')
@section('titile','Landing page')
@section('content')
<a href="{{route('country.index')}}">Run crud operation on Country</a>
<br>
<a href="{{route('location.index')}}">Run crud operation on Location</a>
    
@endsection