<x-form-section>

    <x-slot name="title">{{ __("Profile") }}</x-slot>

    <x-slot name="description">
        {{ __("Update your account's profile information.") }}
    </x-slot>

    <x-slot name="form">

        <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-6 gap-6">
            @method('PUT')
            @csrf
            <!--First name-->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="first_name" :value="__('First name')" />

                <x-input id="first_name" class="block mt-2 w-full" type="text" name="first_name"
                    :value="old('first_name') ?? $user->first_name" placeholder="Enter your first name" maxlength="35"
                    required autofocus />

                <x-input-error for="first_name" class="mt-2" />
            </div>

            <!--Last name-->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="last_name" :value="__('Last name')" />

                <x-input id="last_name" class="block mt-2 w-full" type="text" name="last_name"
                    :value="old('last_name') ?? $user->last_name" placeholder="Enter your last name" maxlength="35"
                    required />

                <x-input-error for="last_name" class="mt-2" />
            </div>

            <!--Username-->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-2 w-full" type="text" name="username"
                    :value="old('username') ?? $user->username" placeholder="Enter your username" maxlength="20"
                    required />

                <x-input-error for="username" class="mt-2" />
            </div>

            <!--Birthdate-->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="birthdate">
                    {{ __('Birthdate') }}
                    <span class="text-sm ml-2 text-gray-400"> ({{ __('Optional') }})</span>
                </x-label>

                <x-input id="birthdate" class="block mt-2 w-full" type="text" name="birthdate" maxlength="10"
                    :value="old('birthdate') ?? $user->birthdate" placeholder="dd/mm/yyyy" />

                <x-input-error for="birthdate" class="mt-2" />
            </div>

            <!--Personal phone-->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="personal_phone" :value="__('Personal phone')" />

                <x-input id="personal_phone" class="block mt-2 w-full" type="text" name="personal_phone" maxlength="10"
                    :value="old('personal_phone') ?? $user->personal_phone" placeholder="Example: 0989999999"
                    required />

                <x-input-error for="personal_phone" class="mt-2" />
            </div>

            <!--Home phone-->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="home_phone" :value="__('Home phone')" />

                <x-input id="home_phone" class="block mt-2 w-full" type="text" name="home_phone" maxlength="9"
                    :value="old('home_phone') ?? $user->home_phone" placeholder="Example: 022999999" required />

                <x-input-error for="home_phone" class="mt-2" />
            </div>

            <!--Address-->
            <div class="col-span-6">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-2 w-full" type="text" name="address"
                    :value="old('address') ?? $user->address" placeholder="Enter your address" maxlength="50"
                    required />

                <x-input-error for="address" class="mt-2" />
            </div>

            <!--Actions-->
            <div class="col-span-6 flex justify-end">
                <x-button class="min-w-max">{{ __('Update') }}</x-button>
            </div>
        </form>
    </x-slot>

</x-form-section>