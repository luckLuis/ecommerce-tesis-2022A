@props([
'primaryColor' => 'blue',
'secondaryColor' => 'green'
])


<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => "inline-flex justify-center p-2 bg-gradient-to-r from-$primaryColor-500 to-$secondaryColor-500  rounded-full font-semibold text-base text-white tracking-widest hover:from-$primaryColor-600 hover:to-$secondaryColor-600 focus:outline-none focus:border-$primaryColor-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
    ]) }}>
    {{ $slot }}
</button>
