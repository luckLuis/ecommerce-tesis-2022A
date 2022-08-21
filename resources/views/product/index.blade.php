@extends('dashboard')

@section('content')



<div class="bg-white p-6 md:p-8 shadow-md">
    <div class="grid grid-cols-12 gap-3 px-4 sm:px-0">
        <div class="col-span-12 md:col-span-8">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __("Lista de productos") }}
            </h3>
            <p class="mt-1 text-sm text-gray-600">
                {{ __("Lista de productos registrados en el sistema.") }}
            </p>
        </div>

        <div class="col-span-12 md:col-span-4 flex items-center mx-auto max-w-max md:w-full">
            <form method="GET" action="{{ route('product.index') }}">
                <x-search />
            </form>
        </div>

    </div>

    <table>
        <thead>
            <tr>
                <th>{{ __("Nombre") }}</th>
                <th>{{ __("Precio") }}</th>
                <th>{{ __("Creado en") }}</th>
                <th>{{ __("Estado") }}</th>
                <th>{{ __("Acciones") }}
                </th>
            </tr>
        </thead>

        <tbody>

            @foreach($products as $product)
            <tr>
                <td>
                    {{ $product->name }}
                <td>

                <td>
                    {{ $product->price }}
                <td>

                <td>

                <td>
                    {{ $product->image->getUrl() }}
                <td>

                </td>




            </tr>
            @endforeach

        </tbody>
        <x-slot name="pagination">

        </x-slot>
    </table>
</div>
@endsection