<div class="container border my-4">
    <div class="row my-3">
        <div class="row">
            <img src="{{$productImage}}" class="img-fluid py-2 img_tam" alt="Responsive image">
        </div>


        <div class="row">
            <p class="letters_car_title text-center">
                {{$title}}
            </p>
        </div>
        <div class="row">
            <p class="letters_car_description text-center">
                $ {{$price}}
            </p>
        </div>

        <div class="row">
            <p class="letters_car_description">
                {{$description}}
            </p>
        </div>


        <div class="row">
            <p class="letters_car_description">
                {{$detail}}
            </p>
        </div>
        <div class="row">
            <p class="letters_car_description">
                {{$description}}
            </p>
        </div>
    </div>

</div>

<style>
.form-check .form-check-input {
    width: 80px;
    height: 80px;
    margin-left: 20%;
    margin-top: 50%;
}

.img_tam {
    width: 20%;
    max-height: 100%;
}
</style>