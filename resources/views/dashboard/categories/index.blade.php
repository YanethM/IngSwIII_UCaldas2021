@extends('dashboard.master')
@section('content')
<a href="{{ route('category.create') }}" class="btn btn-info btn-sm mb-3">Crear publicación</a>
    <h6>Listar categorías</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{ $category->category_name }}</td>
                    <td>{{ $category->content_publication }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <button data-toggle="modal" class="btn btn-danger btn-sm" data-id="{{ $category->id }}"
                            data-target="#exampleModal">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $categories->links() }}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro deseas eliminar la categoría?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deleteCategory" action="{{ route('category.destroy', 0) }}" method="POST"
                    data-action="{{ route('category.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Eliminar categoría</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#deleteCategory').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#deleteCategory').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar la categoría: ' + id)
        })
    }
</script>
