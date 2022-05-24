@extends('master')
@section('content')
    <div class="custom-product">
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
                            <img class="card-img-bottom slider-img" src="{{ $product->gallery }}" alt="{{ $product->description }}">
                            <div class="card-img-overlay text-lg-center">
                                <h4 class="card-title">{{ $product->name }}</h4>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="detail/{{ $product->id }}" class="btn btn-outline-warning">See detail</a>
                            </div>
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
    <div class="mr-2">
        <div class="row">
        @if(!empty($products))
            @foreach ($products as $product)
            <div class="card mb-3" style="width:350px; height: 350px;">
                <img class="card-img-top" style="width:350px; height: 350px;" src="{{ $product->gallery }}" alt="{{ $product->description }}">
                <div class="card-img-overlay">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="detail/{{ $product->id }}" class="btn btn-outline-warning">See detail</a>
                </div>
            </div>
        @endforeach
        @endif
    </div>
    </div>
@endsection