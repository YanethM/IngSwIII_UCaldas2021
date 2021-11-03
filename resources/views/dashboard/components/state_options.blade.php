{{-- 'published', 'reject','in_review' --}}
<option value="revisión">En revisión</option>
<option value="rechazado" {{ $val == 'rechazado' ? 'selected ="selected"': ''}}>
    Rechazado
</option>
<option value="publicado"  {{ $val == 'publicado' ? 'selected ="selected"': ''}}>
    Publicado
</option>
