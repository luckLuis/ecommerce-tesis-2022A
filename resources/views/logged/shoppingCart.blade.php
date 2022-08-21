@extends('dashboard')
@section('content')

<link href="{{asset('css/shoppingCar.css')}}" rel="stylesheet">

<div class="container-fluid">
    <h1 class="mb-4 my-4">{{ __('Mi carrito de compras')}}</h1>
</div>

<hr>

<div class="h-auto">
    @if (true)
    <div class="container-sm decorate1">
        <div class="row">
            <div class="col my-2">
                @for ($i=0; $i< 1; $i++) <x-detail>
                    <x-slot name="productImage">
                        https://picsum.photos/id/9/200/300
                    </x-slot>
                    <x-slot name="title">
                        {{ __('Magni velit perferendis eligendi ad dolore et est.')}}
                    </x-slot>
                    <x-slot name="price">
                        {{ __('120')}}
                    </x-slot>
                    <x-slot name="description">
                        {{ __('Ipsa occaecati quia adipisci. Ducimus repellendus consectetur et at qui. Perferendis quas qui et. Officia est eos assumenda neque non est reiciendis. Laboriosam aliquam saepe et quia temporibus vero architecto.')}}
                    </x-slot>
                    </x-detail>
                    @endfor
            </div>




            <div class="col-3 my-5">
                <p class="letters_car_title text-center">{{ __('Subtotal (1 producto): US$120')}}</p>


                <!-- Button trigger modal -->
                <div class="text-center">
                    <button type="button" class="btn btn-success btn-block my-4 letters_car_botton"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        {{ __('TRAMITAR EL PAGO')}}
                    </button>
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
            </div> @endif
        </div>
    </div>
</div>


<!-- Modal tramitar-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <div class="container-fluid text-center py-4">
                    <h4>
                        <b>
                            {{ __('Acuerdas el pago y envío con el vendedor')}}
                        </b>
                    </h4>
                </div>
            </div>

            <div class="modal-body">


                <div class="container-fluid text-center py-4">
                    <p>
                        {{ __('Luego de confirmar tu compra tendrás que contactar al vendedor para acordar el
                        pago y la entrega del producto.')}}
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container-fluid text-center">
                    <a type="button" class="btn btn-success btn-block my-4 letters_car_botton" href="/sellComplete">
                        {{ __('Ok, entendido')}}
                    </a>
                    <button class="btn btn-danger btn-block my-4 letters_car_botton mx-4"
                        data-bs-dismiss="modal">{{ __('Cancelar')}}</button>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

<style>
.img_tam {
    width: 50%;
    max-height: 100%;
}
</style>