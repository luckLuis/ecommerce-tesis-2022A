@extends('dashboard')
@section('content')

<div class="container-fluid">

    <div class="pb-5">
        @include('profile.visitor')
    </div>

    <div class="pb-5">
        @include('profile.update-profile-information')
    </div>

    <div class="pt-2">
        @include('profile.update-user-password')
    </div>
</div>
@endsection()