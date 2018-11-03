@extends('layouts/master')

@section('title','create location')
    


@section('content')
<h1>fill this form to create location</h1>

<form action="{{route('location.store')}}" method="POST" class="form-horizontal" role="form">
    {{csrf_field()}}
    <div class="form-group">
        <legend>Form title</legend>

        <label>Location name: </label>

        <input type="text" name='location_name' placeholder='input location name'>

        <label>Location latitude: </label>
        <input type="text" name='location_latitude' placeholder='input location latitude'>

        <label>Currency langtitude: </label>
        <input type="text" name='location_longitude' placeholder='input location langtitude'>


    </div>
    
    
   
   
    
    

    

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
    
@endsection