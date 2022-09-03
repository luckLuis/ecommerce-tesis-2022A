@extends('dashboard')
@section('content')

<div>

    <div class="container-fluid">
        <h1 class="mb-4 my-4">
            {{ __('Mis publicaciones') }}
        </h1>
    </div>

    <div class="container mt-4">

        @foreach ($myProductsArray as $products)
        <div class="h-auto">

            <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">

                <div class="row">
                    <div class="col my-2">

                        <div class="row my-3">

                            <div class="col-3 text-center">
                                <img src="{{$images[$products['id']]}}" class="img-fluid py-2 img_tam"
                                    alt="{{$products['name']}}">
                            </div>
                            <div class="col">

                                <p class="letters_car_title">
                                    {{$products['name']}}
                                </p>

                                <p class="letters_car_description">
                                    {{$products['details']}}
                                </p>

                                <div class="letters_car_description">
                                    {{$products['description']}}
                                </div>

                            </div>
                            <div class="col-4  text-center">
                                <p class="letters_car_title">
                                    $ {{$products['price']}}
                                </p>

                                <div class="my-5 aux">

                                    <!-- Edit - ocultar -->
                                    <div class="container-fuild text-center">
                                        <a type="button" href="{{route('delete', $products['id'])}}"
                                            class="btn btn-dark btn-block btn-block mb-4">
                                            <i class="bi bi-eye-slash px-1"></i>OCULTAR
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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

.aux {
    padding-top: 40px;
}

.form-check .form-check-input {
    width: 80px;
    height: 80px;
    margin-left: 20%;
    margin-top: 50%;
}

.letters_car_title {
    font-size: 19px;
    font-weight: bold;
}

.letters_car_botton {
    font-size: 19px;
}

.letters_car_description {
    font-size: 15px;
}

.img_tam {
    width: 50%;
    max-height: 100%;
}

.by {
    font-size: 14px;
    font-style: oblique;
}
</style>