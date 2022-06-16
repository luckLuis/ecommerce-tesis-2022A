<div class="container-fluid border decorate">
    <div class="row my-3">
        <div class="col">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            </div>
        </div>
        <div class="col">
            <img src="{{$productImage}}" class="img-fluid py-2" alt="Responsive image">
        </div>
        <div class="col">

            <div class="col">
                <p class="letters_car_title text-center">
                    {{$title}}
                </p>
            </div>
            <div class="col">
                <p class="letters_car_description text-center">
                    $ {{$price}}
                </p>
            </div>

        </div>
        <div class="col">
            <p class="letters_car_description">
                {{$description}}
            </p>
        </div>
        <div class="col">
            <select class="form-select letters_car_description" aria-label="Default select example">
                <option selected>Cantidad...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
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