<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


<div class="row letters pb-4">
    <div class="row ">
        <div class="col borde-shadow tam">

            <div class="row">
                <div class="col-8">
                    <div class="container-fluid">
                        <h1 class="mx-4 py-4">
                            {{$user['nickname']}}
                        </h1>
                    </div>
                    <hr />
                </div>
                <div class="col">
                    <div class="img-perfil">
                        <img src="url">
                    </div>
                </div>
                <div class="py-5 px-5">

                    <h5 class="py-4">

                        <b>Nombre de usuario: {{$user['nickname']}}</b>

                    </h5>
                    <h5>

                    </h5>
                </div>

                <div class=" px-5">

                    <h2 class="py-4">
                        <i class="bi bi-calendar-week"></i>
                        <b>3</b>
                    </h2>
                    <h5>
                        {{__('Meses vendiendo en EcoModa')}}
                    </h5>

                </div>

                <div class="row align-items-center pt-2">

                    <div class="col">
                        <hr />
                        <h3 class="mb-4 mx-4 text-end text-wrap">

                            {{$user['address']}}

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
                    <h1>{{$user['score']}}</h1>
                </div>
                <div class="col">
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="item">
                    <div class="mx-auto px-5">
                        @for ($i = 0; $i < 10; $i++)<x-sellCompletes>
                            </x-sellCompletes>
                            @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.letters {
    font-family: 'Roboto';
}

.letters {
    font-family: 'Roboto';
}

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