@extends('dashboard')
@section('content')
<div class="container-fluid">
    <h1 class="mb-4 my-4">Mis publicaciones</h1>
</div>
<div class="container">
    <div class="contain tam">
        @for ($i = 0; $i < 8; $i++) <x-cardMyProducts>
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
            @endfor
    </div>
</div>

@endsection

<style>
.contain {
    width: 100%;
    max-width: 1200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
}
</style>