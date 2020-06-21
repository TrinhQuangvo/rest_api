@extends('layouts.layout')
@section('content')
    <div class="container">
    <h1>Pizza order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{$pizza->type }}</p>
    <p class="base">Base - {{$pizza->base}}</p>
    
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <Button>Complete Order</Button>
    </form>
    <a href="/pizzas" class="back">Back To All Products</a>
</div>

@endsection