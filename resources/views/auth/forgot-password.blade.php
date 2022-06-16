@extends('dashboard')
@section('content')

<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Lost password') }}</h1>
</div>

<div class="container py-5">

    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <div class="mb-3 ">
        <div class="container">
            <div class="d-grid gap-2">
                {{ __('Lost your password? Please enter your email. You will receive a link to create a new password by email.') }}
            </div>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3 mt-4">
            <div class="container">
                <div class="d-grid gap-2 col-5">
                    <x-label for="email" :value="__('Email')" />

                    <input id="email" class="form-control" placeholder="Enter your address" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>
            </div>
        </div>

        <div class="mb-3 mt-4">
            <div class="container">
                <div class="d-grid gap-2 col-3">
                    <button type="submit" class="btn btn-success btn-block mb-4">
                        {{ __('Email Password Reset Link') }}
                </div>
            </div>
        </div>
    </form>

</div>
@endsection