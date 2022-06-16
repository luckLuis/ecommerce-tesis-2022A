@extends('dashboard')
@section('content')

<div>
    <x-category>
        <x-slot name="category">
            Mujeres
        </x-slot>
        <x-slot name="type">
            Blusas
        </x-slot>
    </x-category>

    <div class="container mt-4">
        @for ($i = 0; $i < 4; $i++) <x-categoryProductsCard>
            <x-slot name="productImage">
                https://m.media-amazon.com/images/I/61FuyZBddHL._AC_UX342_.jpg
            </x-slot>
            <x-slot name="title">
                Blusa de gasa para mujer, cuello en V, mangas con puños
            </x-slot>
            <x-slot name="seller">
                Marco Lopez
            </x-slot>
            <x-slot name="description">
                95 % poliéster, 5 % elastán
                Cierre de Sin cordones
                Lavado a mano
                Tela no elástica con ajuste regular, un poco más transparente para colores claros.
            </x-slot>
            <x-slot name="price">
                28,99
            </x-slot>
            <x-slot name="cantidad">
                2
            </x-slot>
            </x-categoryProductsCard>
            @endfor
    </div>
</div>



@endsection