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
                <a type="submit" href="{{route('cart.add', $productoArray['Product']['id'])}}"
                    class="btn btn-dark btn-block btn-block mb-4"><i class="bi bi-bag-plus px-1"></i>AGREGAR AL CARRITO
                </a>

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





<style>
.img-product img {
    display: block;
    height: 400px;

    object-fit: cover;
}
</style>