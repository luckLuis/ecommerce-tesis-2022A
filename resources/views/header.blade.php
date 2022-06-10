<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
.header_title {
    font-family: 'Roboto';
    font-size: 20px;
    font-weight: bold;
    background-color: white;
}

.letters_header {
    color: #000000;
}

.letters_submenu {
    color: #ffffff;
}

.header_submenu {
    font-family: 'Roboto';
    font-size: 14px;
    font-weight: bold;
    background-color: #169BA4;
}
</style>



<nav class="navbar navbar-expand-lg header_title">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link letters_header" href="/">
                        <i class="bi bi-house-fill"></i>
                        {{ __('HOME') }}
                    </a>
                </li>

                <li>
                    <a class="nav-link letters_header dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                        {{ Auth::user()->first_name }}
                    </a>
                    <div class="dropdown-center">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li>
                                <a class="dropdown-item" href="/profile">
                                    <i class="bi bi-person-circle"></i>
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/myPublications">
                                    <i class="bi bi-basket-fill"> </i>
                                    {{ __('My Posts') }}</a>
                            </li>
                            <li><a class="dropdown-item" href="/notifications">
                                    <i class="bi bi-bell-fill"></i>
                                    {{ __('Notifications') }}
                                </a>
                            </li>
                            <hr />
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-left"></i>
                                    {{ __('Log Out') }}
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
                        {{ __('REGISTER') }}
                    </a>
                </li>

                @endif
                @endauth
                @endif
            </ul>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="d-grid gap-2 d-md-flex">
                    <li class="nav-item">
                        <a class="nav-link letters_header" href="/">EcoModa</a>
                    </li>
                </div>
                <div class="d-grid gap-2 d-md-flex">
                    <div class="input-group py-auto">
                        <input type="text" class="form-control" placeholder="{{__('Search')}}" aria-label="search"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
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
                            {{ __('SELL') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link letters_header" href="/shoppingCart">
                            <i class="bi bi-cart-fill"></i>
                            CARRITO(0)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg  header_submenu">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('WOMEN') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jeans/Pantalones</a></li>
                        <li><a class="dropdown-item" href="/categoryProducts">Blusas</a></li>
                        <li><a class="dropdown-item" href="#">Camisas</a></li>
                        <li><a class="dropdown-item" href="#">Chaquetas</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('MEN') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jeans/Pantalones</a></li>
                        <li><a class="dropdown-item" href="#">Camisetas</a></li>
                        <li><a class="dropdown-item" href="#">Camisas</a></li>
                        <li><a class="dropdown-item" href="#">Chaquetas</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('GIRL') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jeans/Pantalones</a></li>
                        <li><a class="dropdown-item" href="#">Camisetas</a></li>
                        <li><a class="dropdown-item" href="#">Camisas</a></li>
                        <li><a class="dropdown-item" href="#">Chaquetas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('BOY') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jeans/Pantalones</a></li>
                        <li><a class="dropdown-item" href="#">Camisetas</a></li>
                        <li><a class="dropdown-item" href="#">Camisas</a></li>
                        <li><a class="dropdown-item" href="#">Chaquetas</a></li>
                    </ul>
                </li>
            </ul>


        </div>
    </div>
</nav>