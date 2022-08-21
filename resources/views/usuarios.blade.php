@extends('dashboard')
@section('content')




@foreach($productosArray as $producto) <x-cards.<x-cards.categoryProductsCard>
    <x-slot name="productImage">
        https://m.media-amazon.com/images/I/61FuyZBddHL._AC_UX342_.jpg
    </x-slot>
    <x-slot name="title">
        {{$producto['name']}}
    </x-slot>
    <x-slot name="seller">
        {{ Auth::user()->getFullName() }}
    </x-slot>
    <x-slot name="description">
        aa{{$producto['details']}}
    </x-slot>
    <x-slot name="tags">
        <div class="contain tam">
            @for ($j = 0; $j < 5; $j++) <x-tagsSee>
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
    </x-cards.categoryProductsCard>

    @endforeach
    @endsection