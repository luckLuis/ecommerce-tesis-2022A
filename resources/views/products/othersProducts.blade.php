<div class="mb-4 my-4 mx-4">

    @foreach ( $productoArray["Similar products"] as $similar)
    <div class="py-4">

        <div class="shadow">
            <a type="button" href="{{route('products.oneProduct', $similar['id'])}}">
                <div>

                    <div class="row">

                        <div class="col-3">
                            <div class="img-products">
                                <img src="{{$images[$similar['id']]}}" alt="{{$similar['id']}}">
                            </div>
                        </div>

                        <div class="col mx-4">

                            {{$similar['name']}}
                        </div>
                    </div>

                </div>
            </a>
        </div>

    </div>


    @endforeach
</div>

<style>
.img-products img {
    display: block;
    height: 100px;
    width: 100px;
    object-fit: cover;
}
</style>