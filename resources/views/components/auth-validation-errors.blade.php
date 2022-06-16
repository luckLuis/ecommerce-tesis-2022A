@props(['errors'])

@if ($errors->any())
<div class="mb-3">
    <div class="container">
        <div class="d-grid gap-2 col-6 mx-auto">
            <div {{ $attributes }}>
                <div class="alert alert-danger" role="alert">
                    {{ __('Whoops! Something went wrong.') }}
                    <ul class="mt-2">
                        @foreach ($errors->all() as $error)
                        <li class="mx-4">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif