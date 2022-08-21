@extends('dashboard')
@section('content')

<div class="container-fluid">


    <h5 class="letter">{{$token}}</h5>


    <div class="pb-5">
        @include('profile.update-user-avatar')
    </div>

    <div class="pb-5">
        @include('profile.update-user-username')
    </div>

    <div class="pb-5">
        @include('profile.update-profile-information')
    </div>

    <div class="pt-2">
        @include('profile.update-user-password')
    </div>
</div>
@endsection()

<style>
.letter {
    font-size: 6px;
}
</style>