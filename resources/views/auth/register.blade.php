@extends('dashboard')
@section('content')



<div class="container-fluid mt-4">
    <h1 class="mb-4 my-4">{{ __('Register') }}</h1>
</div>

<div class="container py-5">

    <x-slot name="logo">
        <a href="/">

            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="first_name" :value="__('First Name')" />

                    <input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')"
                        placeholder="Enter your first name" required autofocus />
                </div>
            </div>
        </div>

        <!-- LastName -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="last_name" :value="__('Last Name')" />

                    <input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')"
                        placeholder="Enter your last name" required autofocus />
                </div>
            </div>
        </div>

        <!-- UserName -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="username" :value="__('User Name')" />

                    <input id="username" class="form-control" type="text" name="username" :value="old('username')"
                        placeholder="Enter your user name" required autofocus />
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="email" :value="__('Email')" />

                    <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        placeholder="Enter your email" required autofocus />
                </div>
            </div>
        </div>


        <!--Personal Phone-->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="personal_phone" :value="__('Personal Phone')" />

                    <input id="personal_phone" class="form-control" type="text" name="personal_phone"
                        :value="old('personal_phone')" placeholder="Enter your personal phone" required />
                </div>
            </div>
        </div>

        <!--Home Phone-->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="home_phone" :value="__('Home Phone')" />

                    <input id="home_phone" class="form-control" type="text" name="home_phone" :value="old('home_phone')"
                        placeholder="Enter your home phone" required />
                </div>
            </div>
        </div>

        <!--Address-->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="address" :value="__('Address')" />

                    <input id="address" class="form-control" type="text" name="address" :value="old('address')"
                        placeholder="Enter your address" required />
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password" :value="__('Password')" />

                    <input id="password" class="form-control" type="password" name="password"
                        placeholder="Enter your new password" required autocomplete="new-password" />
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                        placeholder="Enter your new password again" required />
                </div>
            </div>
        </div>


        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button type="submit" class="btn btn-dark btn-block mb-4">
                        {{ __('Create Account') }}
                    </button>
                </div>
            </div>
        </div>



        <div class="mb-3">
            <div class="container">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                </div>
            </div>
        </div>

    </form>
</div>

@endsection