@extends('master')
@section('content')
    <div class="mt-5">
        <div class="row">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-6">
            <h4>Produits recherchés 
                @if(!empty($products))
                   ({{ $products->count() }})
                @endif
            </h4>
            @if(!empty($products))
            @foreach ($products as $product)
            <div class="card mb-3" style="width:350px; height: 350px;">
            <img class="card-img-top" style="width:350px; height: 350px;" src="{{ $product->gallery }}" alt="{{ $product->description }}">
            <div class="card-img-overlay">
                <h2 class="card-title">{{ $product->name }}</h2>
                <h5 class="card-text">{{ $product->description }}</h5>
                <a href="detail/{{ $product->id }}" class="btn btn-outline-warning">See detail</a>
            </div>
            </div>
        @endforeach
        @endif
        </div>
    </div>
    </div>
@endsection