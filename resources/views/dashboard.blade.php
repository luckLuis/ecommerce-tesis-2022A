<!DOCTYPE html>



<html lang="en">

<style>
.bg-main {
    background: #D4D2D2;
    font-family: 'Roboto';
}

body {
    display: grid;
    min-height: 100vh;
    grid-template-rows:
        auto 1fr auto;
}

.bg-boddy {
    background: #F4F0F0;
}

.bg-tam {
    min-height: calc(100vh - 230px);
}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
        href="https://cdn.icon-icons.com/icons2/1949/PNG/512/free-30-instagram-stories-icons40_122587.png">
    <title>EcoModa</title>

    <!-- Latest compiled and minified CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="{{asset('css/header.css')}}" rel="stylesheet">

    <link href="{{asset('css/footer.css')}}" rel="stylesheet">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>


</head>


<body class="bg-main">

    <div class="shadow sticky-top">

        <nav class="navbar navbar-expand-lg header_title">
            <div class="container-fluid">
                <button class="navbar-toggler a1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                            <a class="nav-link letters_header" href="/">
                                <i class="bi bi-house-fill"></i>
                                {{ __('INICIO') }}
                            </a>
                        </li>
                        @if (true)

                        <li>
                            <a class="nav-link letters_header dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                                Luis
                            </a>
                            <div class="dropdown-center">
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li>
                                        <a class="dropdown-item" href="/profile">
                                            <i class="bi bi-person-circle"></i>
                                            {{ __('Perfil') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/myPublications">
                                            <i class="bi bi-basket-fill"> </i>
                                            {{ __('Mis publicaciones') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/notifications">
                                            <i class="bi bi-bell-fill"></i>
                                            {{ __('Notificaciones') }}
                                        </a>
                                    </li>
                                    <hr />
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            <i class="bi bi-box-arrow-left"></i>
                                            {{ __('Cerrar sesión') }}
                                        </a>

                                    </form>

                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link letters_header" href="/login">
                                <i class="bi bi-person-fill"></i>
                                {{ __('LOGIN') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link letters_header" href="/register">
                                <i class="bi bi-person-plus-fill"></i>
                                {{ __('REGISTRO') }}
                            </a>
                        </li>
                        @endif

                        @endif
                    </ul>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="d-grid gap-2 d-md-flex">
                            <li class="nav-item">
                                <a class="nav-link letters_header" href="/">
                                    {{__('EcoModa')}}
                                </a>
                            </li>
                        </div>
                        <div class="d-grid gap-2 d-md-flex">
                            <div class="input-group py-auto">
                                <input type="text" class="form-control" placeholder="{{__('Buscar')}}"
                                    aria-label="search" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary color" type="button" id="button-addon2">
                                    <span>
                                        <i class="bi bi-search"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </ul>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link letters_header" aria-current="page" href="/sell">
                                    <i class="bi bi-bag-check-fill"></i>
                                    {{ __('VENDER') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link letters_header" href="/cart">
                                    <i class="bi bi-cart-fill"></i>
                                    {{ __('CARRITO (1)') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg  header_submenu">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach ($categoriesArray as $categories)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle letters_submenu"
                                href="{{route ('products', $categories['id'])}}" aria-expanded="false">
                                {{ $categories['name'] }}
                            </a>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">

        <div class="shadow p-5 bg-white bg-tam">

            <x-session-status class="mb-4 text-center" :status="session('status')" :color="session('color')" />

            @yield('content')
        </div>

    </div>

    <div class="footer">
        <div class="container-fluid bg-light footer_title">
            <footer class="row py-4 border-top border-5 ">

                <div class="col-1 mx-5">
                    <h5>{{ __('AYUDA') }}</h5>
                    <ul class="nav flex-column letters_footer">
                        <li class="nav-item mb-2 ">
                            <a href="/contact" class="nav-link p-0 text-muted">
                                {{ __('CONTÁCTENOS') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md mx-5">
                    <h5>{{ __('MI CUENTA') }}</h5>
                    <ul class="nav flex-column letters_footer">
                        <li class="nav-item mb-2">
                            <a href="/profile" class="nav-link p-0 text-muted">
                                {{ __('MI CUENTA') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-1 mx-5">
                    <ul class="nav flex-column letters_footer">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                {{__('Volver al inicio')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

</body>


</html>