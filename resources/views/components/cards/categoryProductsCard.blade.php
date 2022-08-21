<div class="h-auto">

    <div class="container-sm border border-2 bg-white my-5 px-4 shadow p-3 mb-5">
        <div class="row">
            <div class="col my-2">

                <div class="row my-3">

                    <div class="col-3 text-center">
                        <img src="{{$productImage}}" class="img-fluid py-2 img_tam" alt="{{$productImage}}">
                    </div>
                    <div class="col">

                        <p class="letters_car_title">
                            {{$title}}
                        </p>

                        <p class="letters_car_description by">
                            <b>Vendedor:</b>
                            <a href="/user/{{$seller}}">
                                {{$seller}}
                            </a>
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



                        <div class="my-5">
                            <div class="container-fuild  text-center">
                                <button type="submit" class="btn btn-dark btn-block btn-block mb-4"
                                    data-bs-toggle="modal" data-bs-target="#agregarcarrito"><i
                                        class="bi bi-bag-plus px-1"></i>AGREGAR AL CARRITO
                                </button>
                            </div>

                            <!-- Submit button -->
                            <div class="container-fuild text-center">
                                <a type="button" href="/shoppingCart" class="btn btn-dark btn-block btn-block mb-4">
                                    <i class="bi bi-bag px-1"></i>COMPRAR
                                </a>

                                <a type="button" href="{{route ('product.product') }}"
                                    class="btn btn-dark btn-block btn-block mb-4">
                                    <i class="bi bi-eye px-1"></i>VER
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="agregarcarrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Producto agregado con éxito!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    ¡Felicidades has agregado tu producto al carrito de compras!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar comprando</button>
                <a type="button" href="/shoppingCart" class="btn btn-primary">Ir al carrito</a>
            </div>
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