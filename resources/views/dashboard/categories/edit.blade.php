@extends('dashboard.master')
@section('content')
    <h6>Editar categoría</h6>
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.categories._form')
    </form>
@endsection