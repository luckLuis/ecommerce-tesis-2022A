@props([
'status',
'color' => 'green'
])

@if ($status)
<div class="alert alert-success" role="alert">
    {{ $status }}
</div>
@endif