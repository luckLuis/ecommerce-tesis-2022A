@extends('dashboard')
@section('content')
<div class="bg-white">
    <div class="container-fluid">
        <h1 class="mb-4 my-4">Nueva publicación</h1>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col mb-4 my-4 mx-4">
                <h6>
                    Para publicar un nuevo producto completa el formulario con los datos solicitados.
                </h6>
            </div>

            <div class="col mb-4 mx-4 ">
                <div class="mb-3">
                    <input type="text" class="form-control" id="productTitle" placeholder="Título">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="productDescription" rows="3"
                        placeholder="Descripción"></textarea>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="productPrice" rows="3"
                        placeholder="Precio"></textarea>
                </div>
                <div class="mb-3">
                    <select class="custom-select form-control">
                        <option selected>Categoría</option>
                        <option value="1">Mujeres</option>
                        <option value="2">Hombres</option>
                        <option value="3">Niñas</option>
                        <option value="3">Niños</option>
                    </select>
                </div>
                <!-- Submit button -->

                <div class="mb-3">
                    <div class="container py-4">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block mb-4">PUBLICAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection