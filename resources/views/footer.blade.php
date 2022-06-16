<style>
.border-top {
    border-top-color: #169BA4 !important;
}

.footer_title {
    font-size: 20px;
    font-weight: bold;
    background-color: white;
}

.letters_footer {
    color: #000000;
    font-size: 14px;
}

.locate {}

.footer {
    margin-top: auto;
}
</style>

<div class="footer">
    <div class="container-fluid bg-light footer_title">
        <footer class="row py-4 border-top border-5 ">

            <div class="col-1 mx-5">
                <h5>{{ __('HELP') }}</h5>
                <ul class="nav flex-column letters_footer">
                    <li class="nav-item mb-2 "><a href="/contact"
                            class="nav-link p-0 text-muted">{{ __('CONTACT US') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md mx-5">
                <h5>{{ __('MY ACCOUNT') }}</h5>
                <ul class="nav flex-column letters_footer">
                    <li class="nav-item mb-2"><a href="/profile"
                            class="nav-link p-0 text-muted">{{ __('MY ACCOUNT') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-1 mx-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link letters_header" href="#">Volver al inicio</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</div>