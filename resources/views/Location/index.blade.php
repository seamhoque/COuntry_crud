@extends('layouts/master')

@section ('title','All Locations')
@section('content')

<h1>showing all the country</h1>

<a href="{{route('location.create')}}">Create Location here</a>
@foreach ($locations as $location)
    <div>
        <li>
           
           <a href="{{route('location.show',$id = $location->id)}}">{{$location->id}}</a>
           |
           <a href="{{route('location.edit',['id'=>$location->id])}}">Edit</a>
           |
           <form action="{{route('location.destroy',['id'=>$location->id])}}" method="POST" onsubmit="return confirm('you sure want to delete?')">
               {{ csrf_field()}}
               {{method_field('DELETE')}}
               <button type="submit">Delete</button>
           </form>
        </li>
    </div>
@endforeach


    
@endsection