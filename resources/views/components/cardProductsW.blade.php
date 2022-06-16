<a href="{{$categorilink}}">
    <div class="card">
        <div class="image-card">
            <img src="{{$productImage}}" class="img-fluid" alt="{{$productTitle}}">
        </div>
        <div class="py-4">
            <h4> {{$productTitle}} </h4>
            <p> Ropa - {{$category}} </p>

        </div>
    </div>
</a>

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
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
    background: #E3E3E3;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-15px);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
}

.image-card {
    height: 220px;
    overflow: hidden;
}

.image-card img {
    width: 100%;
    display: block;
}

.card h4 {
    font-weight: 600;
}
</style>