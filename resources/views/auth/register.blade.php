@extends('master')
@section('content')



<x-guest-layout>

    <x-auth-card>
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
            <div class="mt-4">
                <x-label for="first_name" :value="__('First Name')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                    :value="old('first_name')" placeholder="Enter your first name" required autofocus />
            </div>

            <!-- LastName -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    placeholder="Enter your last name" required autofocus />
            </div>

            <!-- UserName -->
            <div class="mt-4">
                <x-label for="username" :value="__('User Name')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                    placeholder="Enter your user name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="Enter your email" required autofocus />
            </div>


            <!--Personal Phone-->
            <div class="mt-4">
                <x-label for="personal_phone" :value="__('Personal Phone')" />

                <x-input id="personal_phone" class="block mt-2 w-full" type="text" name="personal_phone"
                    :value="old('personal_phone')" placeholder="Enter your personal phone" required />
            </div>

            <!--Home Phone-->
            <div class="mt-4">
                <x-label for="home_phone" :value="__('Home Phone')" />

                <x-input id="home_phone" class="block mt-2 w-full" type="text" name="home_phone"
                    :value="old('home_phone')" placeholder="Enter your home phone" required />
            </div>

            <!--Address-->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-2 w-full" type="text" name="address" :value="old('address')"
                    placeholder="Enter your address" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                    placeholder="Enter your new password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" placeholder="Enter your new password again" required />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('Create Account') }}
                </x-button>
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>

        </form>
    </x-auth-card>
</x-guest-layout>

@endsection