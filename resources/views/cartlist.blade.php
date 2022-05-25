@extends('master')
@section('content')
    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h4>Panier 
                        @if(!empty($products))
                        ({{ $products->count() }}) produits
                        @endif
                    </h4>
                    @if(!empty($products))
                    @foreach ($products as $product)
                    <div class="row mt-3">
                        <div class="col-sm-3">
                            <img style="width:200px; height: 150px;" src="{{ $product->gallery }}" alt="{{ $product->description }}">
                        </div>
                        <div class="col-sm-3">
                            <div>
                                <h2>{{ $product->name }}</h2>
                            <h5>{{ $product->description }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href="/removecart/{{ $product->cartId }}" class="btn btn-outline-warning">Remove to cart</a>
                        </div>
                        <hr class="mt-2">
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection