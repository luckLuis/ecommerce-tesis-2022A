@extends('dashboard')
@section('content')

<div class="bg-white">
    <div class="container-fluid mt-4">
        <h1 class="mb-4 my-4">{{ __('Verificar correo electrónico') }}</h1>
    </div>

    <div class="container py-5">


        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    {{ __('Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.') }}
                </div>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
                </div>
            </div>
        </div>
        @endif


        <div class="container py-4">
            <div class="d-grid gap-2 col-3 mx-auto">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div class="container">
                        <div class="d-grid gap-2 mx-auto">
                            <button type="submit" class="btn btn-success btn-block mb-4">
                                {{ __('REENVIAR CORREO ELECTRÓNICO DE VERIFICACIÓN') }}
                            </button>
                        </div>

                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="container">
                        <div class="d-grid gap-2 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">
                                {{ __('CERRAR SESIÓN') }}
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection