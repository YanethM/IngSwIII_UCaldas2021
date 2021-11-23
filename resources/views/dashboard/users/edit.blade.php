@extends('dashboard.master')
@section('content')
    <h6>Editar datos personales</h6>
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.users._form')
    </form>
@endsection