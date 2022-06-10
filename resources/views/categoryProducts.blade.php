@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <x-category>
        <x-slot name="category">
            Mujeres
        </x-slot>
        <x-slot name="type">
            Blusas
        </x-slot>
    </x-category>
    <div class="container mt-4">



        <x-categoryProductsCard>
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
    </div>
</body>

</html>

@endsection