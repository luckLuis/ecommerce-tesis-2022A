@extends('dashboard')

@section('content')

<div class="mt-2">
    <x-form-section>

        <x-slot name="title">{{ __("Crear un nuevo producto") }}</x-slot>

        <x-slot name="description">
            {{ __("Puede registrar un nuevo producto.") }}
        </x-slot>

        <x-slot name="form">
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data"
                class="grid grid-cols-6 gap-6">
                @csrf
                <!--Name-->
                <div class="col-span-6">
                    <x-label for="name" :value="__('Product Title')" />

                    <x-input id="name" class="block mt-2 w-full" type="text" name="name" :value="old('name')"
                        placeholder="Ingrese el nombre del producto" maxlength="45" required />

                    <x-input-error for="name" class="mt-2" />
                </div>


                <!--Slug-->
                <div class="col-span-6">
                    <x-label for="slug" :value="__('slug')" />

                    <x-input id="slug" class="block mt-2 w-full" type="text" name="slug" :value="old('slug')"
                        placeholder="Ingrese el slug" maxlength="45" required />

                    <x-input-error for="slug" class="mt-2" />
                </div>

                <!--Description-->
                <div class="col-span-6">
                    <x-label for="description" :value="__('Description')" />

                    <x-text-area id="description" name="description" class="block mt-2 w-full" rows="6"
                        placeholder="Ingrese la descripción" maxlength="255" required>{{old('description')}}
                    </x-text-area>

                    <x-input-error for="description" class="mt-2" />
                </div>

                <!--Image-->
                <div class="col-span-6">
                    <x-label for="image">
                        {{ __('Imagen') }}
                        <span class="text-sm ml-2 text-gray-400"> ({{ __('Opcional') }})</span>
                    </x-label>

                    <x-input id="image" class="block mt-2 w-full" type="file" name="image" />

                    <x-input-error for="image" class="mt-2" />
                </div>

                <!--Actions-->
                <div class="mb-3">
                    <div class="container py-4">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">
                                {{ __(' CREAR') }}
                            </button>
                        </div>
                    </div>
                </div>
</div>
</form>
</x-slot>

</x-form-section>
</div>
@endsection