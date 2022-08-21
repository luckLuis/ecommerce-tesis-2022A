<div class="row shadow">

    <div class="col-5 py-2">


        <div class="container-fluid">
            <h4 class="mt-5">{{ __("Actualizar nombre de usuario") }}</h4>
        </div>

        <div class="col mb-4 my-4 mx-4">
            <h6>
                {{ __("Actualiza tu nombre de usuario.") }}
            </h6>
        </div>
    </div>

    <div class="col">
        <div class="container">
            <form method="POST" action="{{ route('user-username.update') }}" class="grid grid-cols-6 gap-6 mt-5">
                @method('PUT')
                @csrf

                <!--Username-->
                <div class="mb-3 row">
                    <x-label for="username" class="col col-form-label" :value="__('Nombre de usuario')" />
                    <div class="col-sm-8">
                        <input id="username" class="form-control" type="text" name="username"
                            :value="{{$user['nickname']}}" placeholder="{{$user['nickname']}}" maxlength="20" required>

                        <x-input-error for="username" class="mt-2" />
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