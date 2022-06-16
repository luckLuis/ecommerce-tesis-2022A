@extends('dashboard')
@section('content')

<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Reset Password') }}</h1>
</div>

<div class="container py-5">

    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="email" :value="__('Email')" />

                    <input id="email" class="form-control" type="email" name="email"
                        :value="old('email', $request->email)" required autofocus />
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password" :value="__('Password')" />

                    <input id="password" class="form-control" type="password" name="password" required />
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        required />
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button type="submit" class="btn btn-dark btn-block mb-4">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection