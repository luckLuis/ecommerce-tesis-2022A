@extends('master')
@section('content')

<link href="{{asset('publications.css')}}" rel="stylesheet">


<div class="h-auto">
    <div class="container-sm border border-2 bg-white my-5 px-4">
        <div class="row">
            <div class="col my-2">

                <div class="row my-3">

                    <div class="col-3 text-center">
                        <img src="{{$productImage}}" class="img-fluid py-2 img_tam" alt="Responsive image">
                    </div>
                    <div class="col">

                        <p class="letters_car_title">
                            {{$title}}
                        </p>

                        <p class="letters_car_description by">
                            by {{$seller}}
                        </p>

                        <p class="letters_car_description">
                            {{$description}}
                        </p>

                    </div>
                    <div class="col-4 my-5 text-center">
                        <p class="letters_car_title">
                            $ {{$price}}
                        </p>
                        <p class="letters_car_description">
                            {{$cantidad}}
                        </p>

                        <!-- Submit button -->
                        <div class="container-fuild text-center">
                            <button type="submit"
                                class="btn btn-dark btn-block btn-block mb-4">{{__('COMPRAR')}}</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection