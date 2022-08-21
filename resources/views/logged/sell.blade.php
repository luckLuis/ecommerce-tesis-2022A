@extends('dashboard')
@section('content')
<div class="bg-white">
    <div class="container-fluid">
        <h1 class="mb-4 my-4">{{__('Nueva publicación')}}</h1>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col mb-4 my-4 mx-4">
                <h6>
                    {{__('Para publicar un nuevo producto completa el formulario con los datos solicitados.')}}
                </h6>
            </div>

            <div class="col-7 mb-4 mx-4 ">

                <form method="POST" action="{{ route('product.store') }}">

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
                                <x-input-error for="name" class="mt-2" />
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
                                    placeholder="Ingrese el detalle del producto" required />
                                <x-input-error for="details" class="mt-2" />
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
                                <input id="price" class="form-control" type="number" name="price"
                                    placeholder="Ingrese el precio del producto" required />
                                <x-input-error for="price" class="mt-2" />
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
                                    placeholder="Ingrese la descripción del producto" required></textarea>
                                <x-input-error for="description" class="mt-2" />
                            </div>
                        </div>
                    </div>


                    <!-- Category -->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="description">
                                    {{__('Categoría')}}
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    name="category_id">

                                    @foreach ($categoriesArray as $categories)
                                    <option value="{{$categories['id']}}">{{$categories['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <!-- Tags -->
                    <div class="mb-3">
                        <div class="container">
                            <div class="d-grid gap-2">
                                <label for="description">
                                    {{__('Tag')}}
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    name="tag">

                                    @foreach ($tagsArray as $tags)
                                    <option value="{{$tags['id']}}">{{$tags['name']}}</option>

                                    @endforeach
                                </select>
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
                                </button>
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