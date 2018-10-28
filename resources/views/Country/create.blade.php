@extends('layouts/master')

@section('title','Create Country')

@section('content') 

<form action="{{route('country.store')}}" method="POST" class="form-horizontal" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <legend>Form title</legend>
        </div>
        
        <div class="input-group">
            <label>Country name</label>
            <input type="text" name='name' placeholder='input country name'>
            
        </div>
        <div class="input-group">
            <label>Country code</label>
            <input type="text" name='country_code' placeholder='input country code'>
            
        </div>
        <div class="input-group">
            <label>Currency code</label>
            <input type="text" name='currency_code' placeholder='input country code'>
            
        </div>
       
        <div class="input-group">
            <label>Currency symbol</label>
            <input type="text" name='currency_symbol' placeholder='input currency symbol'>
            
        </div>
        

        

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</form>


@endsection