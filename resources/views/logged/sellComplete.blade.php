@extends('dashboard')
@section('content')

<link href="{{asset('css/shoppingCar.css')}}" rel="stylesheet">


<div class="container-fluid">
    <h1 class="mb-4 my-4">
        {{ __('Productos reservados') }}
    </h1>
</div>




<div class="container-fluid">
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
                                    <b>Nombre: </b>{{$contact[$list['id']]->name}}
                                </p>
                                <p class="letters_car_description">
                                    <b>Email: </b>{{$contact[$list['id']]->email}}
                                </p>
                                <p class="letters_car_description">
                                    <b>Celular: </b>{{$contact[$list['id']]->personal_phone}}
                                </p>
                                <p class="letters_car_description">
                                    <b>Dirección: </b>{{$contact[$list['id']]->address}}
                                </p>
                            </div>

                        </div>
                        <div class="col-2  text-center py-5">
                            <p class="letters_car_title">
                                $ {{$list['price']}}
                            </p>
                        </div>


                        <div class="col-2  text-center py-5">
                            <a type="button" href="{{route('cart.buy', $list['id'])}}" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bag" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                                    </path>
                                </svg>
                                Comprar
                            </a>
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
                <a type="button" class="btn btn-success btn-block my-4 letters_car_botton" href="/">
                    {{ __('ACEPTAR') }}
                </a>
            </div>
        </div>
    </div>
</div>

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