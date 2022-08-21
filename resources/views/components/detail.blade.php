<div class="h-auto">

    <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
        <div class="row">
            <div class="col my-2">

                <div class="row my-3">

                    <div class="col-3 text-center">
                        <img src="{{$productImage}}" class="img-fluid py-2 img_tam" alt="">
                    </div>
                    <div class="col">

                        <p class="letters_car_title">
                            {{$title}}
                        </p>

                        <p class="letters_car_description">
                            {{$description}}
                        </p>

                    </div>
                    <div class="col-3  text-center">
                        <p class="letters_car_title">
                            $ {{$price}}
                        </p>
                        <div class="delete">
                            <i class="bi bi-trash"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.delete i {
    font-size: 45px;
    color: red;
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