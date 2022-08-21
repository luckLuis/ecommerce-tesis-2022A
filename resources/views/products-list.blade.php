@extends('dashboard')
@section('content')

<div>

    <div class="mx-4 my-4">
        <h1 class="mb-4">
            Categoría: {{$productosArray['Category']['name']}}
        </h1>
    </div>




    <div class="container mt-4">
        @foreach($productosArray['Products'] as $producto)

        <div class="h-auto">

            <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
                <div class="row">
                    <div class="col my-2">

                        <div class="row my-3">

                            <div class="col-3 text-center">


                                <img src="{{$images[$producto['id']]}}" class="img-fluid py-2 img_tam"
                                    alt="{{$producto['name']}}">



                            </div>
                            <div class="col">

                                <p class="letters_car_title">
                                    {{$producto['name']}}
                                </p>

                                <p class="letters_car_description by">
                                    <b>Vendedor:</b>
                                    <a href="{{route('visitor', $producto['user_id'])}}">
                                        {{$users[$producto['user_id']]}}

                                    </a>
                                </p>

                                <p class="letters_car_description">
                                    {{$producto['details']}}
                                </p>

                                <div class="letters_car_description">
                                    <div class="contain tam">
                                        <x-tagsSee>
                                            <x-slot name="tag">
                                                {{$producto['category_id']}}
                                            </x-slot>
                                        </x-tagsSee>

                                    </div>
                                </div>

                            </div>
                            <div class="col-4  text-center">
                                <p class="letters_car_title">
                                    $ {{$producto['price']}}
                                </p>



                                <div class="my-5">
                                    <div class="container-fuild  text-center">
                                        <a type="submit" class="btn btn-dark btn-block btn-block mb-4"
                                            href="{{route('cart.add', $producto['id'])}}" data-bs-toggle="modal"
                                            data-bs-target="#agregarcarrito"><i class="bi bi-bag-plus px-1"></i>AGREGAR
                                            AL CARRITO
                                        </a>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="container-fuild text-center">

                                        <a type="button" class="btn btn-dark btn-block btn-block mb-4">
                                            <i class="bi bi-cart px-1"></i>COMPRAR
                                        </a>

                                        <a type="button" href="{{route('products.oneProduct', $producto['id'])}}"
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


<!-- Modal -->
<div class="modal fade" id="agregarcarrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Producto agregado con éxito!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    ¡Felicidades has agregado tu producto al carrito de compras!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar comprando</button>
                <a type="button" href="{{route('cart.buy')}}" class="btn btn-primary">Ir al carrito</a>
            </div>
        </div>
    </div>
</div>


<style>
.form-check .form-check-input {
    width: 80px;
    height: 80px;
    margin-left: 20%;
    margin-top: 50%;
}

.letters_car_title {
    font-size: 19px;
    font-weight: bold;
}

.letters_car_botton {
    font-size: 19px;
}

.letters_car_description {
    font-size: 15px;
}

.img_tam {
    width: 50%;
    max-height: 100%;
}

.by {
    font-size: 14px;
    font-style: oblique;
}
</style>

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