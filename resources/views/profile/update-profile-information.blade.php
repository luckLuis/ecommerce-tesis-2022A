<div class="row shadow">

    <div class="col-5 py-2">



        <div class="container-fluid">
            <h4 class="mt-5">{{ __('Update Profile') }}</h1>
        </div>

        <div class="col mb-4 my-4 mx-4">

            <h6>
                {{ __("Update your account's profile information.") }}
            </h6>
        </div>



    </div>
    <div class="col">
        <div class="container">

            <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-6 gap-6 mt-5">
                @method('PUT')
                @csrf
                <!--First name-->
                <div class="mb-3 row">
                    <x-label for="first_name" class="col col-form-label" :value="__('First name')" />
                    <div class="col-sm-9">
                        <x-input id="first_name" class="form-control" type="text" name="first_name"
                            :value="old('first_name') ?? $user->first_name" placeholder="Enter your first name"
                            maxlength="35" required autofocus />

                        <x-input-error for="first_name" class="mt-2" />
                    </div>
                </div>

                <!--Last name-->
                <div class="mb-3 row">
                    <x-label for="last_name" class="col col-form-label" :value="__('Last name')" />
                    <div class="col-sm-9">
                        <x-input id="last_name" class="form-control" type="text" name="last_name"
                            :value="old('last_name') ?? $user->last_name" placeholder="Enter your last name"
                            maxlength="35" required />

                        <x-input-error for="last_name" class="mt-2" />
                    </div>
                </div>

                <!--Username-->
                <div class="mb-3 row">
                    <x-label for="username" class="col col-form-label" :value="__('Username')" />
                    <div class="col-sm-9">
                        <x-input id="username" class="form-control" type="text" name="username"
                            :value="old('username') ?? $user->username" placeholder="Enter your username" maxlength="20"
                            required />

                        <x-input-error for="username" class="mt-2" />
                    </div>
                </div>

                <!--Birthdate-->
                <div class="mb-3 row">
                    <x-label class="col col-form-label" for="birthdate">
                        {{ __('Birthdate') }}
                        <span class="text-sm ml-2 text-gray-400"> ({{ __('Optional') }})</span>
                    </x-label>
                    <div class="col-sm-9">
                        <x-input id="birthdate" class="form-control" type="text" name="birthdate" maxlength="10"
                            :value="old('birthdate') ?? $user->birthdate" placeholder="dd/mm/yyyy" />

                        <x-input-error for="birthdate" class="mt-2" />
                    </div>
                </div>

                <!--Personal phone-->
                <div class="mb-3 row">
                    <x-label for="personal_phone" class="col col-form-label" :value="__('Personal phone')" />
                    <div class="col-sm-9">
                        <x-input id="personal_phone" class="form-control" type="text" name="personal_phone"
                            maxlength="10" :value="old('personal_phone') ?? $user->personal_phone"
                            placeholder="Example: 0989999999" required />

                        <x-input-error for="personal_phone" class="mt-2" />
                    </div>
                </div>

                <!--Home phone-->
                <div class="mb-3 row">
                    <x-label for="home_phone" class="col col-form-label" :value="__('Home phone')" />
                    <div class="col-sm-9">
                        <x-input id="home_phone" class="form-control" type="text" name="home_phone" maxlength="9"
                            :value="old('home_phone') ?? $user->home_phone" placeholder="Example: 022999999" required />

                        <x-input-error for="home_phone" class="mt-2" />
                    </div>
                </div>

                <!--Address-->
                <div class="mb-3 row">
                    <x-label for="address" class="col col-form-label" :value="__('Address')" />
                    <div class="col-sm-9">
                        <x-input id="address" class="form-control" type="text" name="address"
                            :value="old('address') ?? $user->address" placeholder="Enter your address" maxlength="50"
                            required />

                        <x-input-error for="address" class="mt-2" />
                    </div>
                </div>



                <!--Actions-->
                <div class="mb-3 pt-4">
                    <div class="container">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<style>
.form-control {}
</style>