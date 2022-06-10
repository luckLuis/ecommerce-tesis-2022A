@extends('master')
@section('content')
<div class="container-fluid">
    <h1 class="mb-4 my-4 mx-4">Mis publicaciones</h1>
</div>
<div class="container ">
    <div class="h-auto d-flex ">
        <x-cardMyProducts>
            <x-slot name="productImage">
                https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?w=2000
            </x-slot>
            <x-slot name="productTitle">
                As
            </x-slot>
            <x-slot name="category">
                Mujer
            </x-slot>
        </x-cardMyProducts>



    </div>
</div>
@endsection