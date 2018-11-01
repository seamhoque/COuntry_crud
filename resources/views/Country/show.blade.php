@extends('layouts/master')

@section('title','Coundtry details')

@section ('content')

<span class="label">showin country detail</span>

<div class="panel panel-default">
    <div class="panel-body">
       <p>Country Name:  {{$country->name}}</p>
       <p>Country code: {{$country->country_code}}</p>
       <p>Currency code: {{$country->currency_code}}</p>
       <p>Country Symbol: {{$country->currency_symbol}}</p>
    </div>
</div>




@endsection