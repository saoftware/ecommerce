@extends('master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <img style="width: 400px; height: 300px" src="{{ $product->gallery }}" alt="{{ $product->description }}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{ $product->name }}</h2>
            <h3>Price : {{ $product->price }}$</h3>
            <h4>Description : {{ $product->description }}</h4>
            <h4>Catégory : {{ $product->category }}</h4>
            <form action="/add_to_cart" method="POST" class="mt-3">
                @csrf
                <div class="form-group mb-3">
                   <input type="hidden" class="form-control" name="product_id" value="{{ $product->id }}">
                    <button class="btn btn-outline-primary">Add to Cart</button>
                </div>
            </form>
            <button class="btn btn-outline-success">By now</button>
        </div>
    </div>
</div>
@endsection