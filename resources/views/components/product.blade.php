<div class="shadow">
    <a type="button" href="/category/product/{{$slug}}">
        <div>

            <div class="row">

                <div class="col-3">
                    <div class="img-products">
                        <img src="{{$imagen}}">
                    </div>
                </div>

                <div class="col mx-4">

                    {{$detalle}}
                </div>
            </div>

        </div>
    </a>
</div>
<style>
.img-products img {
    display: block;
    height: 100px;
    width: 100px;
    object-fit: cover;
}
</style>