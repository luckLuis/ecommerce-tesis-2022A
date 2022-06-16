@extends('dashboard')
@section('content')

<div class="bg-white">
    <div class="container-fluid mt-4">
        <h1 class="mb-4 my-4">{{ __('Verify Email') }}</h1>
    </div>

    <div class="container py-5">


        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
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
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>

                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="container">
                        <div class="d-grid gap-2 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">
                                {{ __('Log Out') }}
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection