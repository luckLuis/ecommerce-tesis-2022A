@extends('dashboard')
@section('content')
<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Confirm password') }}</h1>
</div>

<div class="container py-5">

    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

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
                    {{ __('Confirm') }}
                </div>
            </div>
        </div>
    </form>
</div>

@endsection