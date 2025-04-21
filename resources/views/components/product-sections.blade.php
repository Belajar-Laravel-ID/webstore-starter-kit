@props(['title' => 'Title Section', 'url' => '#'])
<!-- Title -->
<div class="max-w-2xl mx-auto text-center">
    <h2 class="text-xl font-bold md:text-2xl md:leading-tight dark:text-white">{{ $title }}</h2>
</div>
<!-- End Title -->
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 mx-auto">
    <!-- Grid -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @for ($i = 0; $i < 3; $i++)
            <x-single-product-card />
        @endfor
    </div>
    <div class="flex justify-center w-full mt-5">
        <a href="{{ $url }}" class="flex items-center text-gray-700">
            <span class="border-b">
                Show More Product
            </span>
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </a>
    </div>
    <!-- End Grid -->
</div>
<!-- End Card Blog -->
