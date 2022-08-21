@extends('dashboard')
@section('content')

<div>


    <div class="container-fluid">
        <h1 class="mb-4 my-4">
            {{ __('Mis publicaciones') }}
        </h1>
    </div>

    <div class="container mt-4">
        @for ($i = 0; $i < 1; $i++) <x-cards.publicationsCard>
            <x-slot name="productImage">
                https://m.media-amazon.com/images/I/61FuyZBddHL._AC_UX342_.jpg
            </x-slot>
            <x-slot name="title">
                Blusa de gasa para mujer, cuello en V, mangas con puños
            </x-slot>
            <x-slot name="seller">

            </x-slot>
            <x-slot name="description">
                95 % poliéster, 5 % elastán
                Cierre de Sin cordones
                Lavado a mano
                Tela no elástica con ajuste regular, un poco más transparente para colores claros.
            </x-slot>
            <x-slot name="tags">
                <div class="contain tam">
                    @for ($j = 0; $j < 3; $j++) <x-tagsSee>
                        <x-slot name="tag">
                            Tag{{$j + 1}}
                        </x-slot>
                        </x-tagsSee>
                        @endfor
                </div>
            </x-slot>


            <x-slot name="price">
                28,99
            </x-slot>
            </x-cards.publicationsCard>

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
    margin: auto;
}

.tam {
    min-height: 5px;
}
</style>