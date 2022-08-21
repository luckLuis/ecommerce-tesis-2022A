<link href="{{asset('css/myPublications.css')}}" rel="stylesheet">

<div class="card">
    <img src="{{$productImage}}" class="img-fluid" alt="{{$productTitle}}">
    <div class="py-4">
        <h4> {{$productTitle}} </h4>
        <p> Ropa - {{$category}} </p>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark btn-block mb-4">
                {{ __('Edit') }}
            </button>
            <button type="submit" class="btn btn-dark btn-block mb-4">
                {{ __('Delete') }}
            </button>
        </div>
    </div>
</div>