@extends('dashboard')
@section('content')

<div class="">
    <div class="container-fluid mt-4">
        <h1 class="mb-4 my-4">{{ __('Iniciar sesión') }}</h1>
    </div>

    <div class="container py-5">



        <!-- Session Status -->
        <x-auth.auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email or Username -->
            <div class="mb-3">
                <div class="container">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <x-label for="login_field" :value="__('Correo electrónico o nombre de usuario')" />

                        <input id="login_field" class="form-control" type="text" name="login_field"
                            :value="old('login_field')" placeholder="Ingrese su nombre de usuario o correo electrónico"
                            required autofocus />
                    </div>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <div class="container">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <x-label for="password" :value="__('Contraseña')" />

                        <input id="password" class="form-control" type="password" name="password"
                            placeholder="Ingrese su Contraseña" required autocomplete="current-password" />
                    </div>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="mb-3">
                <div class="container">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                        </label>
                    </div>
                </div>
            </div>


            <!-- Login button -->
            <div class="mb-3">
                <div class="container">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="submit" class="btn btn-dark btn-block mb-4">
                            {{ __('INICIAR SESIÓN') }}
                        </button>
                    </div>
                </div>
            </div>






        </form>

    </div>
</div>
@endsection