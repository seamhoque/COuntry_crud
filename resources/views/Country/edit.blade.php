@extends('layouts/master')

@section('title','Edit Country')


@section('content')
<form action="{{route('country.update',['id'=>$country->id])}}" method="POST" class="form-horizontal" role="form">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <legend>Form title</legend>
        </div>
        
        <div class="input-group">
            <label>Country name</label>
            <input type="text" name='name' placeholder='input country name' value = '{{$country->name}}' >
            
        </div>
        <div class="input-group">
            <label>Country code</label>
            <input type="text" name='country_code' placeholder='input country code' value = '{{$country->country_code}}'>
            
        </div>
        <div class="input-group">
            <label>Currency code</label>
            <input type="text" name='currency_code' placeholder='input country code' value = '{{$country->currency_code}}'>
            
        </div>
       
        <div class="input-group">
            <label>Currency symbol</label>
            <input type="text" name='currency_symbol' placeholder='input currency symbol' value = '{{$country->currency_symbol}}'>
            
        </div>
        

        

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</form>
@endsection