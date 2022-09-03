@extends('dashboard')
@section('content')

<link href="{{asset('css/shoppingCar.css')}}" rel="stylesheet">

<div class="container-fluid">
    <h1 class="mb-4 my-4">
        {{ __('Productos reservados') }}
    </h1>
</div>

<div class="container-fluid">
    @if(false)
    @foreach ($listArray['Reserve'] as $list)
    <div class="h-auto">

        <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
            <div class="row">
                <div class="col my-2">

                    <div class="row my-3">

                        <div class="col-3 text-center">
                            <img src="{{$images[$list['id']]}}" class="img-fluid py-2 img_tam" alt="">
                            <p class="letters_car_title">
                                {{$list['name']}}
                            </p>
                        </div>

                        <div class="col">

                            <p class="letters_car_title">
                                Datos de contacto
                            </p>


                            <div class="container">
                                <p class="letters_car_description">
                                    {{$contact[$list['id']]->name}}
                                </p>
                                <p class="letters_car_description">
                                    {{$contact[$list['id']]->email}}
                                </p>
                                <p class="letters_car_description">
                                    {{$contact[$list['id']]->personal_phone}}
                                </p>
                                <p class="letters_car_description">
                                    {{$contact[$list['id']]->address}}
                                </p>
                            </div>
                        </div>
                        <div class="col-2  text-center py-5">
                            <p class="letters_car_title">
                                $ {{$list['price']}}
                            </p>
                        </div>


                        <div class="col-2  text-center py-5">
                            <s type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bag" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                    </path>
                                </svg>
                                Comprar
                            </s>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @else
    <div class="container-fluid ">
        <h6 class="mb-4 my-4">
            {{ __('Aun no haz reservado productos.')}}
        </h6>
        <h6 class="mb-4 my-4">
            {{ __('Continua comprando en ')}} <a href="/">ecoModa</a>
        </h6>
        <!-- Submit button -->
        <div class="mb-3">
            <div class="container py-4">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="/" type="submit" class="btn btn-dark btn-block mb-4">
                        {{ __('CONTINUAR COMPRANDO') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>


<div class="container-fluid">
    <h1 class="mb-4 my-4">
        {{ __('Productos comprados') }}
    </h1>
</div>


@if(false)

<div class="container-fluid">
    @foreach ($listArray['Purchased Products'] as $list)
    <div class="h-auto">

        <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
            <div class="row">
                <div class="col my-2">

                    <div class="row my-3">

                        <div class="col-3 text-center">
                            <img src="{{$images2[$list['id']]}}" class="img-fluid py-2 img_tam" alt="">
                            <p class="letters_car_title">
                                {{$list['name']}}
                            </p>
                        </div>

                        <div class="col">

                            <p class="letters_car_title">
                                Datos de contacto
                            </p>


                            <div class="container">
                                <p class="letters_car_description">
                                    {{$contact2[$list['id']]->name}}
                                </p>
                                <p class="letters_car_description">
                                    {{$contact2[$list['id']]->email}}
                                </p>
                                <p class="letters_car_description">
                                    {{$contact2[$list['id']]->personal_phone}}
                                </p>
                                <p class="letters_car_description">
                                    {{$contact2[$list['id']]->address}}
                                </p>
                            </div>
                        </div>
                        <div class="col-2  text-center py-5">
                            <p class="letters_car_title">
                                $ {{$list['price']}}
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="mb-3">
        <div class="container">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a type="button" class="btn btn-success btn-block my-4" href="/">
                    {{ __('VOLVER A COMPRAR') }}
                </a>
            </div>
        </div>
    </div>
</div>

@else
<div class="container-fluid ">
    <h6 class="mb-4 my-4">
        {{ __('Aun no haz realizado compras.')}}
    </h6>
    <h6 class="mb-4 my-4">
        {{ __('Continua comprando en ')}} <a href="/">ecoModa</a>
    </h6>
    <!-- Submit button -->
    <div class="mb-3">
        <div class="container py-4">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="/" type="submit" class="btn btn-dark btn-block mb-4">
                    {{ __('CONTINUAR COMPRANDO') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endif


@endsection

<style>
.img_tam {
    width: 40%;
    max-height: 100%;
}

.buy i {
    font-size: 45px;
    color: green;
}

.decorate {
    border-radius: 25px;
    box-shadow: 0 10px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 10px;
    margin-bottom: 30px;
    text-align: center;
    background: #E3E3E3;
}
</style>