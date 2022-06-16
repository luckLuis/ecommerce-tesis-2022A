<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <!--Info section-->
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">
                {{ $title }}
            </h3>
            <p class="mt-1 text-sm text-gray-600">
                {{ $description }}
            </p>
        </div>
    </div>

    <!--Form-->
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow-md overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                {{ $form }}
            </div>
        </div>
    </div>
</div>
