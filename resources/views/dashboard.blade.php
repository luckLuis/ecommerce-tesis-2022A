@extends('master')
@section('content')
<div class="contair-fuild ">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mx-auto">
            <div class="carousel-item active">
                <img src="https://static2.abc.es/media/antropia/2022/03/11/AdobeStock_266181289-Rt0tjGI8jBU2mTvQi4kOx3J-620x349.jpg"
                    class="d-block " alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.ambientum.com/wp-content/uploads/2019/02/ropa-696x468.jpg" class="d-block "
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.anahuac.mx/mexico/sites/default/files/noticias/Los-colores-que-utilizamos-en-la-ropa-dicen-como-somos.jpg"
                    class="d-block img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

@endsection

<style>
.img-tam {
    height: 70% !important;
}
</style>