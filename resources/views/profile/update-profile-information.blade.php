<div class="row shadow">

    <div class="col-5 py-2">



        <div class="container-fluid">
            <h4 class="mt-5">{{ __('Actualización del perfil') }}</h1>
        </div>

        <div class="col mb-4 my-4 mx-4">

            <h6>
                {{ __("Actualice la información de perfil de su cuenta.") }}
            </h6>
        </div>



    </div>
    <div class="col">
        <div class="container">

            <form method="POST" action="{{ route('profile.update') }}" class="grid grid-cols-6 gap-6 mt-5">
                @method('PUT')
                @csrf



                <!--Personal phone-->
                <div class="mb-3 row">
                    <x-label for="personal_phone" class="col col-form-label" :value="__('Celular')" />
                    <div class="col-sm-8">
                        <input id="personal_phone" class="form-control" type="text" name="personal_phone" maxlength="10"
                            :value="{{$user['personal_phone']}}" placeholder="{{$user['personal_phone']}}" required />

                        <x-input-error for="personal_phone" class="mt-2" />
                    </div>
                </div>

                <!--Home phone-->
                <div class="mb-3 row">
                    <x-label for="home_phone" class="col col-form-label" :value="__('Teléfono de casa')" />
                    <div class="col-sm-8">
                        <input id="home_phone" class="form-control" type="text" name="home_phone" maxlength="9"
                            :value="{{$user['home_phone']}}" placeholder="{{$user['home_phone']}}" required />

                        <x-input-error for="home_phone" class="mt-2" />
                    </div>
                </div>

                <!--Address-->
                <div class="mb-3 row">
                    <x-label for="address" class="col col-form-label" :value="__('Dirección')" />
                    <div class="col-sm-8">
                        <input id="address" class="form-control" type="text" name="address"
                            :value="{{$user['address']}}" placeholder="{{$user['address']}}" maxlength="50" required />

                        <x-input-error for="address" class="mt-2" />
                    </div>
                </div>



                <!--Actions-->
                <div class="mb-3 pt-4">
                    <div class="container">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">
                                {{ __('ACTUALIZAR') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>