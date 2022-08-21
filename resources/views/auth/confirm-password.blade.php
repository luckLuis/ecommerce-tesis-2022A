@extends('dashboard')
@section('content')
<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Confirmar contraseña') }}</h1>
</div>

<div class="container py-5">


    <div class="mb-4 text-sm text-gray-600">
        {{ __('Esta es un área segura de la aplicación. Por favor confirme su contraseña antes de continuar.') }}
    </div>

    <!-- Validation Errors -->
    <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <x-label for="password" :value="__('Password')" />

                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-3 mx-auto">
                    {{ __('Confirmar') }}
                </div>
            </div>
        </div>
    </form>
</div>

@endsection