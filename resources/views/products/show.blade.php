@extends('dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col pb-5">
            @include('products.product')
        </div>

        <div class="col-4 mb-4 mx-4 shadow py-4">

            <h4>
                <b>
                    {{ __('¡Otros productos!') }}
                </b>
            </h4>
            <div class="wrapper">
                <div class="item">

                    @include('products.othersProducts')

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<style>
.wrapper {
    overflow-y: auto;
}

.wrapper .item {
    min-width: 220px;
    max-height: 840px;
}
</style>