@props([
'focusColor' => 'indigo'
])

<textarea {!! $attributes->merge([
                            'class' => "rounded-2xl text-base px-4 py-2 border-0 border-b border-gray-300
                             focus:ring-0 focus:border-$focusColor-500 disabled:opacity-50"
    ]) !!}
>{{ $slot }}</textarea>