@props([
'color' => 'blue',
'hover' => 'green'
])

<a {!! $attributes->merge(['class'=> "text-sm text-$color-600 hover:text-$hover-700"]) !!}>
    {{$slot}}
</a>