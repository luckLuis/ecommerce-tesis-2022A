<div class="relative w-full">
    <input class="bg-white h-10 px-5 pr-16 rounded-full text-sm w-full border-gray-300 focus:border-gray-300 focus:ring
        focus:ring-transparent" type="search" name="search" id="search" placeholder="{{ __('Buscar') }}"
        value="{{ request('search') }}">

    <button type="submit" class="absolute right-6 top-0 mt-3 mr-4">
        <x-icons.search />
    </button>
</div>