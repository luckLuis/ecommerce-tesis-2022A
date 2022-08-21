@props([
'color' => 'blue'
])

<span {{ $attributes->merge([
    "class" => "inline-block rounded-full text-$color-600 bg-$color-100 px-2 py-1 text-xs font-bold mr-3"
]) }}>
    {{ $slot }}
</span>