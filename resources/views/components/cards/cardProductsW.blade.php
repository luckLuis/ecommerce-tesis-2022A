<link href="{{asset('css/myPublications.css')}}" rel="stylesheet">

<a href="{{$categorilink}}">
    <div class="card">
        <div class="image-card">
            <img src="{{$productImage}}" class="img-fluid" alt="{{$category}}">
        </div>
        <div class="py-4">
            <h4> {{$productTitle}} </h4>
            <p> {{$category}} </p>

        </div>
    </div>
</a>