@extends('dashboard')
@section('content')



<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Registro') }}</h1>
</div>

<div class="container py-5">


    <!-- Validation Errors -->
    <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf


        <!-- Name -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="first_name" :value="__('Nombre')" />

                    <input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')"
                        placeholder="Ingrese su nombre" required autofocus />
                    <x-input-error for="first_name" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- LastName -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="last_name" :value="__('Apellido')" />

                    <input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')"
                        placeholder="Ingrese su apellido" required autofocus />
                    <x-input-error for="last_name" class="mt-2" />
                </div>
            </div>
        </div>



        <!-- UserName -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="username" :value="__('Nombre de usuario')" />

                    <input id="username" class="form-control" type="text" name="username" :value="old('username')"
                        placeholder="Ingrese su nombre de usuario" required autofocus />
                    <x-input-error for="username" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="email" :value="__('Correo electrónico')" />

                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        placeholder="Ingrese su correo electrónico" required autofocus />
                    <x-input-error for="email" class="mt-2" />
                </div>
            </div>
        </div>


        <!--Personal Phone-->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="personal_phone" :value="__('Celular')" />

                    <input id="personal_phone" class="form-control" type="text" name="personal_phone"
                        :value="old('personal_phone')" placeholder="Ingrese su número de celular" required />
                    <x-input-error for="personal_phone" class="mt-2" />
                </div>
            </div>
        </div>

        <!--Home Phone-->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="home_phone" :value="__('Teléfono de casa')" />

                    <input id="home_phone" class="form-control" type="text" name="home_phone" :value="old('home_phone')"
                        placeholder="Ingrese su teléfono de casa" required />
                    <x-input-error for="home_phone" class="mt-2" />
                </div>
            </div>
        </div>

        <!--Address-->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="address" :value="__('Dirección')" />

                    <input id="address" class="form-control" type="text" name="address" :value="old('address')"
                        placeholder="Ingrese su dirección" required />
                    <x-input-error for="address" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password" :value="__('Contraseña')" />

                    <input id="password" class="form-control" type="password" name="password"
                        placeholder="Ingrese su nueva contraseña" required autocomplete="new-password" />
                    <x-input-error for="password" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        placeholder="Ingrese su nueva contraseña nuevamente" required />
                    <x-input-error for="password_confirmation" class="mt-2" />
                </div>
            </div>
        </div>


        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button type="submit" class="btn btn-dark btn-block mb-4">
                        {{ __('CREAR CUENTA') }}
                    </button>
                </div>
            </div>
        </div>



        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('¿Ya te registraste?') }}
                    </a>

                </div>
            </div>
        </div>
    </form>
</div>

@endsection