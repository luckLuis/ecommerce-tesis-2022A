<style>
.footer_title {
    font-size: 18px;
    font-weight: bold;
    background-color: white;
}

.letters_footer {
    color: #000000;
    font-size: 14px;
}

.footer {
    margin-top: auto;
}

.border-top {
    border-top-color: #169BA4 !important;
}
</style>

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

<style>
.border-top {
    border-top-color: #169BA4 !important;
}
</style>