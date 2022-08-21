@props([
'for'
])

@error($for)

<p {{ $attributes }}>
<div class="text-danger">
    {{ $message }}
</div>
</p>

@enderror