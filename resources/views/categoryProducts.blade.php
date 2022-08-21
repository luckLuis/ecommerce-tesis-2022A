@extends('dashboard')
@section('content')

<div class="container-fluid">
    <x-category>
        <x-slot name="category">
            Mujeres
        </x-slot>
        <x-slot name="type">
            Blusas
        </x-slot>
    </x-category>

    <div class="container mt-4">
        @foreach($productos as $producto)


        <div class="h-auto">

            <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
                <div class="row">
                    <div class="col my-2">

                        <div class="row my-3">

                            <div class="col-3 text-center">
                                <img src="" class="img-fluid py-2 img_tam" alt="">
                            </div>
                            <div class="col">

                                <p class="letters_car_title">
                                    {{$producto->name}}
                                </p>

                                <p class="letters_car_description by">
                                    <b>Vendedor:</b>
                                    <a href="/user/{{$seller}}">
                                        {{$producto->id}}
                                    </a>
                                </p>

                                <p class="letters_car_description">
                                    {{$producto->description}}
                                </p>

                                <div class="letters_car_description">
                                    <div class="contain tam">
                                        <x-tagsSee>
                                            <x-slot name="tag">
                                                {{$producto->category_id}}
                                            </x-slot>
                                        </x-tagsSee>

                                    </div>
                                </div>

                            </div>
                            <div class="col-4  text-center">
                                <p class="letters_car_title">
                                    $ {{$producto->price}}
                                </p>



                                <div class="my-5">
                                    <div class="container-fuild  text-center">
                                        <button type="submit" class="btn btn-dark btn-block btn-block mb-4"
                                            data-bs-toggle="modal" data-bs-target="#agregarcarrito"><i
                                                class="bi bi-bag-plus px-1"></i>AGREGAR AL CARRITO
                                        </button>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="container-fuild text-center">
                                        <a type="button" href="/shoppingCart"
                                            class="btn btn-dark btn-block btn-block mb-4">
                                            <i class="bi bi-bag px-1"></i>COMPRAR
                                        </a>

                                        <a type="button" href="{{route ('product.product'), $producto->id }}"
                                            class="btn btn-dark btn-block btn-block mb-4">
                                            <i class="bi bi-eye px-1"></i>VER
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        @endforeach
    </div>
</div>




@endsection

<style>
.contain {
    width: 100%;
    max-width: 1200px;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
}

.tam {
    min-height: 5px;
}
</style>