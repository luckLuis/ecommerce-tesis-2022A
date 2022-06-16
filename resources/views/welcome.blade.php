<?php
$images = [
    "https://phantom-elmundo.unidadeditorial.es/506d8bca935c39cfc3aea25c1402899f/resize/990/f/webp/assets/multimedia/imagenes/2021/07/30/16276615277173.jpg",
    "https://img.freepik.com/foto-gratis/retrato-guapo-sonriente-elegante-joven-modelo-vestido-ropa-jeans-hombre-moda_158538-5030.jpg?t=st=1655202054~exp=1655202654~hmac=ebd9ed31d5582772fa7609df89579e717ce533a8c676242479ddab240175dbc6&w=826",
    "https://i.pinimg.com/564x/a2/90/71/a29071f29907fb67ed5c7a397f98e9a9.jpg",
    "https://i.pinimg.com/564x/cf/30/0c/cf300c49bb7cb5e9e262741f62001432.jpg"
];

$categories = [
"Mujer", "Hombre", "Niño", "Niña"
];
?>
@extends('dashboard')
@section('content')

<div class="container-fluid">


    <div class="container-fluid d-flex flex-row">
        <h1>
            {{ __('Welcome') }}
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
            @foreach ($images as $image) <x-cardProductsW>

                <x-slot name="categorilink">
                    /women/categoryProducts
                </x-slot>

                <x-slot name="productImage">
                    {{$image}}
                </x-slot>
                <x-slot name="productTitle">
                    Ropa - Mujer
                </x-slot>
                <x-slot name="category">
                    MUJER
                </x-slot>
            </x-cardProductsW>

            @endforeach



        </div>

    </div>
</div>



@endsection
<style>
.contain {
    width: 100%;
    max-width: 1200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
}

.tam {
    min-height: 120%;
}
</style>