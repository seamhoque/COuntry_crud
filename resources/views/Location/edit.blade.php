@extends('layouts/master')
@section('title','Edit Location details')

@section('content')
<form action="{{route('location.update',['id'=>$location->id])}}" method="POST" class="form-horizontal" role="form">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <legend>Form title</legend>
    
            <label>Location name: </label>
    
            <input type="text" name='location_name' placeholder='input location name' value="{{$location->location_name}}">
    
            <label>Location latitude: </label>
            <input type="text" name='location_latitude' placeholder='input location latitude' value="{{$location->location_latitude}}">
    
            <label>Currency langtitude: </label>
            <input type="text" name='location_longitude' placeholder='input location langtitude' value="{{$location->location_longitude}}">
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    
@endsection