@extends('dashboard')
@section('content')

<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Contraseña perdida') }}</h1>
</div>

<div class="container py-5">


    <div class="mb-3 ">
        <div class="container">
            <div class="d-grid gap-2">
                {{ __('¿Perdiste tu contraseña? Por favor ingrese su correo electrónico. Recibirá un enlace para crear una nueva contraseña por correo electrónico.') }}
            </div>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth.auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3 mt-4">
            <div class="container">
                <div class="d-grid gap-2 col-5">
                    <x-label for="email" :value="__('Correo electrónico')" />

                    <input id="email" class="form-control" placeholder="Ingrese su dirección" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>
            </div>
        </div>

        <div class="mb-3 mt-4">
            <div class="container">
                <div class="d-grid gap-2 col-3">
                    <button type="submit" class="btn btn-success btn-block mb-4">
                        {{ __('ENVIAR') }}
                </div>
            </div>
        </div>
    </form>

</div>
@endsection