@extends('layouts/master')
@section('title','Showing individual Location')

@section('content')

<div class="panel panel-default">
        <div class="panel-body">
           <p>Location Name:  {{$location->location_name}}</p>
           <p>Location longitude code: {{$location->location_longitude}}</p>
           <p>Location latitude: {{$location->location_latitude}}</p>
           
        </div>
    </div>
    
@endsection
    
