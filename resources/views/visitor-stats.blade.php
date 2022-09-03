@extends('dashboard')
@section('content')

<link href="{{asset('profile.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


<style>
.img-perfil img {
    border-radius: 50%;
    display: block;
    height: 150px;
    width: 150px;
    object-fit: cover;
}

.borde-shadow {
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
}

.wrapper {
    overflow-y: auto;
}

.wrapper .item {
    min-width: 220px;
    max-height: 340px;
    line-height: 220px;
    text-align: center;
}
</style>

<div class="row letters pb-4">
    <div class="row ">
        <div class="col borde-shadow tam">

            <div class="row">
                <div class="col-8">
                    <div class="container-fluid">
                        <h1 class="mx-4 py-4">
                            {{$usersArray['user']['name']}}

                        </h1>
                    </div>
                    <hr />

                </div>
                <div class="col">
                    <div class="img-perfil">
                        <img src="{{$avatar}}" alt="name">
                    </div>
                </div>
                <div class="py-5 px-5">

                    <h5 class="py-4">

                        <b>Nombre de usuario: {{$usersArray['user']['nickname']}}</b>

                    </h5>
                </div>
                <div class=" px-5">

                    <h5>
                        <b>Dirección: {{$usersArray['user']['address']}}</b>
                    </h5>

                </div>

                <div class="row align-items-center pt-2">

                    <div class="col">
                        <hr />
                        <h3 class="mb-4 mx-4 text-end text-wrap">


                            ecoModa


                        </h3>
                    </div>
                </div>



            </div>

        </div>
        <div class="col borde-shadow mx-4 tam">
            <div class="container-fluid">
                <div class="col">
                    <h4 class="mb-4 py-5">{{ __('Calificaciones como vendedor') }}</h4>
                </div>
            </div>


            <!--Progress bar-->
            <div class="row pb-4">
                <div class="col-3 text-center">
                    <h1>{{$usersArray['user']['score']}}</h1>
                </div>
                <div class="col">
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{$usersArray['user']['score']}}%" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection()