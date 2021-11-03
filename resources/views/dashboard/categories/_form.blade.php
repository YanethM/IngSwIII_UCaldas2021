{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="category_name" id="category_name" 
    placeholder="Nombre publicación" value="{{old('category_name', $category -> category_name)}}">
</div>

<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="Contenido de la publicación">
        {{old('content_publication', $category -> content_publication)}}
    </textarea>
</div>
<button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
