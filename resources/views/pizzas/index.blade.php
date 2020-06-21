@extends('layouts.layout') 
    @section('content')
    <div class="container flex-center">  
        @foreach ($test as $item)
            <p class="d-block full-width">{{  $item->name }} - {{ $item->type}} - {{ $item->price }}</p> 
        @endforeach
        <p class="mess">
            {{session('mess')}}
        </p>
    </div> 
@endsection 