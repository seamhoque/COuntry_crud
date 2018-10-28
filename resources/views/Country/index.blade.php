@extends('layouts/master')

@section ('title','All Countries')

@section('content')
    
    @foreach($countries as $country)
    
    
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{route('country.show',['id'=>$country->id ])}}">{{$country->name}}</a>
            |
            <a href="{{route('country.edit', ['id'=>$country->id ])}}">Edit</a>
            |
            <form action="{{route('country.destroy', ['id'=>$country->id ])}}" method="POST" onsubmit="return confirm('want to delete?')">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            
        </li>
        
    </ul>
    
    
    @endforeach
    
@endsection


