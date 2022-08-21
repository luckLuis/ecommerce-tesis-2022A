@extends('dashboard')

@section('content')

<div class="mt-2">
    <x-form-section>

        <x-slot name="title">{{ __("Información del Producto") }}</x-slot>

        <x-slot name="description">
            {{ __("Puedes ver la información del producto.") }}
        </x-slot>

        <x-slot name="form">
            <div class="grid grid-cols-6 gap-6">

                <!--Title-->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-2 w-full" type="text" name="title" :value="$product->name"
                        disabled />
                </div>

                <!--Description-->
                <div class="col-span-6">
                    <x-label for="description" :value="__('Description')" />

                    <x-text-area id="description" class="block mt-2 w-full" rows="6" name="description" disabled>
                        {{ $product->description }}</x-text-area>
                </div>

                @if (!is_null($product->image))
                <!--Image-->
                <div class="col-span-6">
                    <a href="{{ $product->image->getUrl() }}" target="_blank">
                        <img class="w-80 h-80 mx-auto object-cover" src="{{ $product->image->getUrl() }}"
                            alt="{{ $product->name }}">
                    </a>
                </div>
                @endif


                <!--Actions-->
                <div class="col-span-6 flex justify-end">
                    <x-link :href="route('product.index')">
                        <x-button class="min-w-max">{{ __('Pagina anterior') }}</x-button>
                    </x-link>
                </div>
            </div>
        </x-slot>

    </x-form-section>
</div>
@endsection