@extends('master')
@section('content')
<div class="container-fluid">
    <h1 class="mb-4 my-4 mx-4">Mi carrito de compras</h1>
</div>

<div class="h-auto">

    <div class="container-sm border border-2 bg-white my-5 px-4">
        <div class="row">
            <div class="col my-2">
                <x-detail>
                    <x-slot name="productImage">
                        https://frutocuatro.com/wp-content/uploads/2018/05/camiseta-64000-royal-frente.jpg
                    </x-slot>
                    <x-slot name="title">
                        Camiseta
                    </x-slot>
                    <x-slot name="price">
                        19.99
                    </x-slot>
                    <x-slot name="description">
                        Camiseta XL con bordes rojos y diseno en el centro
                    </x-slot>
                </x-detail>

                <x-detail>
                    <x-slot name="productImage">
                        https://frutocuatro.com/wp-content/uploads/2018/05/camiseta-64000-royal-frente.jpg
                    </x-slot>
                    <x-slot name="title">
                        Camiseta
                    </x-slot>
                    <x-slot name="price">
                        19.99
                    </x-slot>
                    <x-slot name="description">
                        Camiseta XL con bordes rojos y diseno en el centro
                    </x-slot>
                </x-detail>

                <x-detail>
                    <x-slot name="productImage">
                        https://frutocuatro.com/wp-content/uploads/2018/05/camiseta-64000-royal-frente.jpg
                    </x-slot>
                    <x-slot name="title">
                        Camiseta
                    </x-slot>
                    <x-slot name="price">
                        19.99
                    </x-slot>
                    <x-slot name="description">
                        Camiseta XL con bordes rojos y diseno en el centro
                    </x-slot>
                </x-detail>

            </div>


            <div class="col-2 my-5">
                <p class="letters_car_title text-center">Subtotal (1 producto): US$19.90</p>


                <!-- Button trigger modal -->
                <div class="text-center">
                    <button type="button" class="btn btn-success btn-block my-4 letters_car_botton"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        TRAMITAR EL PAGO
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid text-center py-4">
                                    <h5>
                                        Acuerdas el pago y envío con el vendedor
                                    </h5>
                                </div>
                                <div></div>
                                <div class="container-fluid text-center py-4">
                                    <p>
                                        Luego de confirmar tu compra tendrás que contactar al vendedor para acordar el
                                        pago y la entrega del producto.
                                    </p>
                                </div>
                                <div class="container-fluid text-center">
                                    <button type="button" class="btn btn-success btn-block my-4 letters_car_botton"
                                        data-bs-dismiss="modal">Ok, entendido</button>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
<style>
.letters_car_title {
    font-family: 'Roboto';
    font-size: 19px;
    font-weight: bold;
}

.letters_car_botton {
    font-family: 'Roboto';
    font-size: 19px;
}

.letters_car_description {
    font-family: 'Roboto';
    font-size: 15px;
}
</style>