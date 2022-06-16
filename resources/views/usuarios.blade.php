@extends('dashboard')
@section('content')

<table class="table col-12 table-responsive">
    <thead>
        <tr>
            <th>Id</th>
            <th>Id</th>
            <th>Id</th>
            <th>Id</th>
            <th>Id</th>
            <th>Id</th>
            <th>Id</th>

        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>

            <td>{{$usuario->first_name}}</td>
            <td>{{$usuario->last_name}}</td>
            <td>{{$usuario->username}}</td>
            <td>{{$usuario->personal_phone}}</td>
            <td>{{$usuario->home_phone}}</td>
            <td>{{$usuario->address}} </td>
            <td>{{$usuario->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection