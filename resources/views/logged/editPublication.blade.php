@extends('dashboard')
@section('content')
<div class="bg-white">
    <div class="container-fluid">
        <h1 class="mb-4 my-4">{{__('Editar publicación')}}</h1>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col mb-4 my-4 mx-4">
                <h6>
                    Aqui puedes editar tu publicación, llenando todos los campos a editar.
                </h6>
            </div>

            <div class="col-7 mb-4 mx-4 ">

                <form method="POST" action="{{ route('product.edit') }}">

                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="name">
                                    {{__('Nombre del producto')}}
                                </label>
                                <input id="name" class="form-control" type="text" name="name"
                                    placeholder="Ingrese el nombre del producto" required />

                            </div>
                        </div>
                    </div>

                    <!--Details-->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="details">
                                    {{__('Detalle')}}
                                </label>
                                <input id="details" class="form-control" type="text" name="details"
                                    placeholder="Ingrese el detalle" required />
                            </div>
                        </div>
                    </div>

                    <!--Price-->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="price">
                                    {{__('Precio')}}
                                </label>
                                <input id="price" class="form-control" type="text" name="price"
                                    placeholder="Ingrese el precio" required />
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="description">
                                    {{__('Descripción')}}
                                </label>
                                <textarea class="form-control" id="description" name="description" rows="4"
                                    placeholder="Ingrese la descripción" required></textarea>
                            </div>
                        </div>
                    </div>



                    <!-- Image -->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="image">
                                    {{__('Imagen')}}
                                </label>
                                <input id="image" class="block mt-2 w-full" type="file" name="image" />

                                <x-input-error for="image" class="mt-2" />
                            </div>
                        </div>
                    </div>


                    <!-- Submit button -->
                    <div class="mb-3">
                        <div class="container py-4">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-dark btn-block mb-4">
                                    {{ __('PUBLICAR') }}
                            </div>
                        </div>
                    </div>
                </form>

            </div>
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
    margin: auto;
}

.tam {
    min-height: 120%;
}
</style>