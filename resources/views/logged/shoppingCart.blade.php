@extends('dashboard')
@section('content')

<link href="{{asset('css/shoppingCar.css')}}" rel="stylesheet">

<div class="container-fluid">
    <h1 class="mb-4 my-4">{{ __('Mi carrito de compras')}}</h1>
</div>

<hr>

<div class="h-auto">
    @if ($bool)
    <div class="container-sm decorate1">
        <div class="row">
            <div class="col my-2">

                @foreach ($cartArray as $cart)

                <div class="h-auto">

                    <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
                        <div class="row">
                            <div class="col my-2">

                                <div class="row my-3">

                                    <div class="col-3 text-center">
                                        <img src="{{$images[$cart['id']]}}" class="img-fluid py-2 img_tam" alt="">
                                    </div>
                                    <div class="col">

                                        <p class="letters_car_title">
                                            {{$cart['name']}}
                                        </p>

                                        <p class="letters_car_description">
                                            {{$cart['details']}}
                                        </p>

                                    </div>
                                    <div class="col-2  text-center py-5">
                                        <p class="letters_car_title">
                                            $ {{$cart['price']}}
                                        </p>
                                    </div>


                                    <div class="col-2  text-center">
                                        <div class="delete py-4">


                                            <a type="button" href="{{route('cart.discard', $cart['id'])}}"
                                                class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                                Quitar
                                            </a>

                                        </div>
                                        <div class="reserve py-4">
                                            <a type="button" href="{{route('cart.reserve', $cart['id'])}}"
                                                class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                                                    </path>
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                                    </path>
                                                </svg>
                                                Reservar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach
            </div>




            <div class="col-3 my-5 py-5">
                <p class="letters_car_title text-center">Subtotal ({{$items}} producto/s): $ {{$price}}</p>
            </div>


            <div class="mb-3">
                <div class="container">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a type="button" class="btn btn-success btn-block my-4 letters_car_botton"
                            href="{{route('list.reserve')}}">
                            {{ __('CONTINUAR A PRODUCTOS RESERVADOS') }}
                        </a>
                    </div>
                </div>
            </div>

            @else
            <div class="container-fluid ">
                <h6 class="mb-4 my-4">
                    {{ __('Tu carrito de compras se encuentra vacío, agrega productos para continuar con la compra.')}}
                </h6>
                <h6 class="mb-4 my-4">
                    {{ __('Continua comprando en ')}} <a href="/">ecoModa</a>
                </h6>
                <!-- Submit button -->
                <div class="mb-3">
                    <div class="container py-4">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="/" type="submit" class="btn btn-dark btn-block mb-4">
                                {{ __('CONTINUAR COMPRANDO') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p><b>o</b></p>
            </div>
            <div class="mb-3">
                <div class="container">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a type="button" class="btn btn-success btn-block my-4" href="{{route('list.reserve')}}">
                            {{ __('CONTINUAR A PRODUCTOS RESERVADOS') }}
                        </a>
                    </div>
                </div>
            </div>@endif
        </div>
    </div>
</div>




@endsection

<style>
.img_tam {
    width: 50%;
    max-height: 100%;
}

.delete i {
    font-size: 45px;
    color: red;
}

.reserve i {
    font-size: 45px;
    color: green;
}

.decorate {
    border-radius: 25px;
    box-shadow: 0 10px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 10px;
    margin-bottom: 30px;
    text-align: center;
    background: #E3E3E3;
}
</style>