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

</body>

</html>

@endsection