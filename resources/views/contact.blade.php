@extends('dashboard')
@section('content')


<div class="container-fluid">
    <h1 class="mb-4 my-4">
        {{ __('Contact us') }}
    </h1>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col mb-4 my-4 mx-4">
            <h4>
                {{ __('¿Cómo podemos ayudar?') }}
            </h4>

            <h6 class="py-4">
                {{ __('Complete el siguiente formulario y un representante de Servicio al Cliente le responderá a la brevedad..') }}
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
                <textarea class="form-control" id="productDescription" rows="3" placeholder="Descripción"></textarea>
            </div>

            <!-- Submit button -->
            <div class="mb-3">
                <div class="container py-4">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-dark btn-block mb-4">
                            {{ __('ENVIAR') }}
                        </button>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

@endsection