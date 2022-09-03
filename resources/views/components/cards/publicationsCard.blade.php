<div class="h-auto">

    <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">

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
                            <b>Vendedor:</b>

                            {{$seller}}

                        </p>

                        <p class="letters_car_description">
                            {{$description}}
                        </p>

                        <div class="letters_car_description">
                            {{$tags}}
                        </div>

                    </div>
                    <div class="col-4  text-center">
                        <p class="letters_car_title">
                            $ {{$price}}
                        </p>



                        <div class="my-5 aux">

                            <!-- Edit - ocultar -->
                            <div class="container-fuild text-center">
                                <a type="button" class="btn btn-dark btn-block btn-block mb-4">
                                    <i class="bi bi-eye-slash px-1"></i>OCULTAR
                                </a>
                                <a type="button" href="/product/edit" class="btn btn-dark btn-block btn-block mb-4">
                                    <i class="bi bi-pencil px-1"></i>EDITAR
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
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