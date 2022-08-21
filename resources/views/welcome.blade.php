@extends('dashboard')
@section('content')

<link href="{{asset('css/welcome.css')}}" rel="stylesheet">
<link href="{{asset('css/myPublications.css')}}" rel="stylesheet">

<div class="container-fluid">


    <div class="container-fluid d-flex flex-row">
        <h1>
            {{ __('Bienvenid@') }}
        </h1>
        @if (Route::has('login'))
        @auth
        <p class="px-2"></p>
        <h1 class="mb-4">
            {{ Auth::user()->first_name }}!
        </h1>
        @else
        <h1>
            !
        </h1>
        @endauth
        @endif

    </div>

    <div id="carouselExampleIndicators" class="carousel slide py-4" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.istockphoto.com/photos/clothing-on-hanger-at-the-modern-shop-boutique-picture-id533833660?s=612x612"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://media.istockphoto.com/photos/close-up-of-woman-hand-choosing-thrift-young-and-discount-tshirt-in-picture-id941051278?s=612x612"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://media.istockphoto.com/photos/summer-seasonal-apparel-and-hand-of-customer-in-shop-picture-id576934272?s=612x612"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid d-flex flex-column bd-highlight mb-3">

        <div class="contain tam">
            @foreach ($categoriesArray as $categories)


            <a href="{{route ('products', $categories['id'])}}">
                <div class="card">
                    <div class="image-card">
                        <img src="https://media.glamour.mx/photos/6190c4daf5ed039ceea8d850/master/pass/156462.jpg"
                            class="img-fluid" alt="{{$categories['name']}}">
                    </div>
                    <div class="py-4">
                        <h4> Ropa </h4>
                        <p> {{$categories['name']}} </p>

                    </div>
                </div>
            </a>


            @endforeach


        </div>
    </div>
</div>

@endsection