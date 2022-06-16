<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<style>
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
</style>

<div class="row letters pb-4">
    <div class="row ">
        <div class="col borde-shadow">

            <div class="row">
                <div class="col-8">
                    <div class="container-fluid">
                        <h1 class="mx-4 py-4">{{ Auth::user()->getFullName() }}</h1>
                    </div>
                    <hr />
                </div>
                <div class="col">
                    <div class="img-perfil">
                        <img
                            src="https://previews.123rf.com/images/mimagephotography/mimagephotography1812/mimagephotography181200205/113230400-primer-plano-retrato-de-hombre-latino-guapo-contra-el-fondo-blanco-aislado.jpg?fj=1">
                    </div>
                </div>
                <div class="py-5 px-5">

                    <h2 class="py-4">
                        <i class="bi bi-check2-square"></i>
                        <b>45</b>
                    </h2>
                    <h5>{{__('Completed sales')}}</h5>
                </div>

                <div class=" px-5">

                    <h2 class="py-4">
                        <i class="bi bi-calendar-week"></i>
                        <b>3</b>
                    </h2>
                    <h5>{{__('Months selling in EcoModa')}}</h5>

                </div>

                <div class="row align-items-center pt-2">
                    <div class="col">

                    </div>

                    <div class="col-sm-6">
                        <hr />
                        <h3 class="mb-4 mx-4">
                            <b>
                                {{ Auth::user()->address}}
                            </b>
                        </h3>
                    </div>
                </div>



            </div>

        </div>
        <div class="col borde-shadow mx-4">
            <div class="container-fluid">
                <div class="col">
                    <h4 class="mb-4 py-5">{{ __('Qualifications as a seller') }}</h4>
                </div>
            </div>


            <!--Progress bar-->
            <div class="row pb-4">
                <div class="col-3 text-center">
                    <h1>{{ Auth::user()->score+100 }}</h1>
                </div>
                <div class="col">
                    <div class="progress mt-3">
                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ Auth::user()->score+10}}%" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="mx-auto ml-5">
                @for ($i = 0; $i < 4; $i++)<x-sellCompletes>
                    </x-sellCompletes>
                    @endfor
            </div>
        </div>
    </div>
</div>