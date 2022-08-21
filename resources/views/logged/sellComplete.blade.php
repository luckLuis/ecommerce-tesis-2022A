@extends('dashboard')
@section('content')

<div class="container-fluid">
    <h1 class="mb-4 my-4">
        {{ __('Venta completada') }}
    </h1>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col mb-4 my-4 mx-4">
            <img src="https://c.tenor.com/ujI068l1JL4AAAAM/sassy-cats.gif" />
        </div>

        <div class="col mb-4 mx-4 shadow">
            <div class="mb-3">
                <input type="text" class="form-control" id="userName" placeholder="Nombre">
                <label>Nombre:</label>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="userLastName" placeholder="Apellido">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="container">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a type="button" class="btn btn-success btn-block my-4 letters_car_botton" href="/">
                    {{ __('ACEPTAR') }}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection