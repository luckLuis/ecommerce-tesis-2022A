@extends('master')
@section('content')

<div class="bg-white">
    <div class="container-fluid">
        <h1 class="mb-4 my-4 mx-4">Contáctanos</h1>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col mb-4 my-4 mx-4">
                <h4>
                    ¿Cómo te podemos ayudar?
                </h4>

                <h6 class="py-4">
                    Completa el siguiente formulario y un representante de Servicio al Cliente te responderá lo más
                    pronto posible.
                </h6>
            </div>

            <div class="col mb-4 mx-4 ">
                <div class="mb-3">
                    <input type="text" class="form-control" id="userName" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="userLastName" placeholder="Apellido">
                </div>
                <div class="form-outline mb-4">
                    <input type="email" id="registerEmail" class="form-control" placeholder="Email">
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 8px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="userNumber" placeholder="Teléfono">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="productDescription" rows="3"
                        placeholder="Descripción"></textarea>
                </div>

                <!-- Submit button -->
                <div class="mb-3">
                    <div class="container py-4">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">ENVIAR</button>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
@endsection