@extends('dashboard')
@section('content')

<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Restablecer la contraseña') }}</h1>
</div>

<div class="container py-5">
    <!-- Validation Errors -->
    <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="email" :value="__('Correo electrónico')" />

                    <input id="email" class="form-control" type="email" name="email"
                        :value="old('email', $request->email)" required autofocus />
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password" :value="__('Contraseña')" />

                    <input id="password" class="form-control" type="password" name="password" required />
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        required />
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button type="submit" class="btn btn-dark btn-block mb-4">
                        {{ __('REESTABLECER CONTRASEÑA') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection