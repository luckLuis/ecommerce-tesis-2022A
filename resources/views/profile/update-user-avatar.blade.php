<style>
.img-perfil img {
    border-radius: 50%;
    display: block;
    height: 150px;
    width: 150px;
    object-fit: cover;
}
</style>

<div class="row shadow">

    <div class="col-5 py-2">


        <div class="container-fluid">
            <h4 class="mt-5">{{ __("Avatar") }}</h4>
        </div>

        <div class="col mb-4 my-4 mx-4">
            <h6>
                {{ __("Actualiza tu avatar de perfil.") }}
            </h6>
        </div>
    </div>

    <div class="col py-4 my-4">
        <div class="container">
            <form method="POST" action="{{ route('user-avatar.update') }}" enctype="multipart/form-data"
                class="grid grid-cols-6 gap-6">
                @method('PUT')
                @csrf


                <!--User avatar-->
                <div class="row">
                    <div class="col-4">
                        <div class="img-perfil">

                            <img src="" alt="{{$user['name']}}" />

                        </div>
                    </div>

                    <!--Image-->
                    <div class="col">
                        <h5>{{__('Imagen')}}</h5>

                        <input id="image" class="block mt-2 w-full" type="file" name="image" required />

                        <x-input-error for="image" class="mt-2" />
                    </div>
                </div>
                <!--Actions-->

                <div class="mb-3 pt-4">
                    <div class="container">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-dark btn-block mb-4">{{ __('ACTUALIZAR') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>