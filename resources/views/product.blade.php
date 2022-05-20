@extends('master')
@section('content')
    <div class="container custom-product">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                
                @if(!empty($products))
                    @foreach ($products as $key => $product)
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}" class="active"></button>
                    @endforeach
                 @endif
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                @if(!empty($products))
                    @foreach ($products as $product)
                        <div class="carousel-item {{ $product->id == 1 ? 'active' : '' }}">
                            <h3>{{ $product->name }}</h3>
                            <img class="slider-img" src="{{ $product->gallery }}" alt="{{ $product->description }}" class="d-block w-100">
                            <p>Price : <span style="color: red">{{ $product->price }}</span></p>
                        </div>
                    @endforeach
                 @endif

            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
@endsection