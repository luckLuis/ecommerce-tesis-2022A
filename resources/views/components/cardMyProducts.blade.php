<div class="card">

    <img src="{{$productImage}}" class="img-fluid" alt="{{$productTitle}}">
    <div class="py-4">
        <h4> {{$productTitle}} </h4>
        <p> Ropa - {{$category}} </p>
        <div class="d-grid gap-2 col-3 mx-auto">
            <button type="submit" class="btn btn-dark btn-block mb-4">
                {{ __('Edit') }}
            </button>
        </div>
    </div>
</div>


<style>
a {
    color: #021222;
    text-decoration: none;
}

a:hover {
    color: #169BA4;
}

.card {
    width: 300px;
    height: 350px;
    border-radius: 8px;
    box-shadow: 0 5px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
    background: #E3E3E3;
}

.card:hover {
    transform: translateY(-15px);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}

.card img {
    width: 330px;
    height: 220px;
}

.card h4 {
    font-weight: 600;
}
</style>