<div class="mb-4 my-4 mx-4">
    <h4>


        <b>
            {{$productoArray['Product']['name']}}
        </b>
    </h4>

    <h6 class="py-4">
        {{$productoArray['Product']['details']}}
    </h6>

    <div align="center">
        <div class="img-product">
            <img src="{{$image}}" alt="{{$productoArray['Product']['name']}}">
        </div>
    </div>


    <!-- Buttons -->
    <div class="container-fuild py-4">
        <div class="row">
            <div class="col">
                $ {{$productoArray['Product']['price']}}
            </div>
            <div class="col-7">
                <button type="submit" class="btn btn-dark btn-block btn-block mb-4" data-bs-toggle="modal"
                    data-bs-target="#agregarcarrito"><i class="bi bi-bag-plus px-1"></i>AGREGAR AL CARRITO
                </button>

                <a type="button" href="/shoppingCart" class="btn btn-dark btn-block btn-block mb-4">
                    <i class="bi bi-bag px-1"></i>COMPRAR
                </a>
            </div>
        </div>

        <div>
            <b>Vendedor: </b> <a href="{{route('visitor', $productoArray['Product']['user_id'])}}">
                {{$users[$productoArray['Product']['user_id']]}}
            </a>
        </div>
        <div class="py-4">{{$productoArray['Product']['description']}}</div>
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
.img-product img {
    display: block;
    height: 400px;

    object-fit: cover;
}
</style>