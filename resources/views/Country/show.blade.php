@extends('layouts/master')

@section('title','Coundtry details')

@section ('content')

<span class="label">showin country detail</span>

<div class="panel panel-default">
    <div class="panel-body">
       <p>{{$country->name}}</p>
       <p>{{$country->country_code}}</p>
       <p>{{$country->currency_code}}</p>
       <p>{{$country->currency_symbol}}</p>
    </div>
</div>




@endsection