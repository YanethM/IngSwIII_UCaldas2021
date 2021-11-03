@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="category_name" id="category_name"
            placeholder="Categoría" value="{{ $category->category_name }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="content_publication" id="content_publication" 
        cols="30" rows="10" placeholder="Descripción">
            {{ $category->content_publication }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection
