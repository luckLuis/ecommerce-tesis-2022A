<div class="row shadow">

    <div class="col-5 py-2">


        <div class="container-fluid">
            <h4 class="mt-5">{{ __("Update password") }}</h4>
        </div>

        <div class="col mb-4 my-4 mx-4">
            <h6>
                {{ __("Make sure your account uses a long, random password to be safe.") }}
            </h6>
        </div>
    </div>

    <div class="col">
        <div class="container">
            <form method="POST" action="{{ route('user-password.update') }}" class="grid grid-cols-6 gap-6 mt-5">
                @method('PUT')
                @csrf
                <!--Current password-->
                <div class="mb-3 row">
                    <x-label for="current_password" class="col col-form-label" :value="__('Current password')" />
                    <div class="col-sm-9">
                        <x-input id="current_password" class="form-control" type="password" name="current_password"
                            placeholder="Enter your current password" maxlength="255" required />

                        <x-input-error for="current_password" class="mt-2" />
                    </div>
                </div>

                <!--New password-->
                <div class="mb-3 row">
                    <x-label for="password" class="col col-form-label" :value="__('New password')" />
                    <div class="col-sm-9">
                        <x-input id="password" class="form-control" type="password" name="password"
                            placeholder="Enter your new password" maxlength="255" required />

                        <x-input-error for="password" class="mt-2" />
                    </div>
                </div>


                <!--Confirm new password-->
                <div class="mb-3 row">
                    <x-label for="password_confirmation" class="col col-form-label" :value="__('Confirm Password')" />
                    <div class="col-sm-9">
                        <x-input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" placeholder="Enter your new password again" maxlength="255"
                            required />

                        <x-input-error for="password_confirmation" class="mt-2" />
                    </div>
                </div>

                <!--Actions-->
                <div class="mb-3 pt-4">
                    <div class="container">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">{{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>