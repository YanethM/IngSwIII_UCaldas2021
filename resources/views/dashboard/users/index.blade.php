@extends('dashboard.master')
@section('content')
<a href="{{ route('post.create') }}" class="btn btn-info btn-small mb-3">Crear publicación</a>
    <h6>Listar publicaciones</h6>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Código</th>
                <th>Publicación</th>
                <th>Contenido</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->publication }}</td>
                    <td>{{ $post->content_publication }}</td>
                    <td>{{ $post->state_publication }}</td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <button data-toggle="modal" class="btn btn-danger btn-sm" data-id="{{ $post->id }}"
                            data-target="#exampleModal">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
{{ $posts->links() }}

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
                ¿Seguro deseas eliminar la publicación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form id="deletePost" action="{{ route('post.destroy', 0) }}" method="POST"
                    data-action="{{ route('post.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Eliminar publicación</button>
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
            action = $('#deletePost').attr('data-action').slice(0,-1)
            action += id
            console.log(action)
            $('#deletePost').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar la publicación: ' + id)
        })
    }
</script>
