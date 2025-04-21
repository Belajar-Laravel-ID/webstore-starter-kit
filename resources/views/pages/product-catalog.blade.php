<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-10">
            <div class="grid grid-cols-1 gap-10 pr-6 border-r border-gray-200 md:col-span-3">
                <div>
                    <div class="space-y-3">
                        <input type="text" placeholder="Search"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                    <span class="block mt-5 mb-2 text-lg font-semibold text-gray-800 dark:text-neutral-200">
                        Collections
                    </span>
                    <div class="block space-y-4">
                        @php
                            $collections = [
                                'Outwear',
                                'Top',
                                'Bottom',
                                'Dress',
                                'Accessories',
                                'Footwear',
                                'Activewear',
                            ];
                        @endphp
                        @foreach ($collections as $i => $item)
                            <div class="flex items-center justify-between">
                                <div class="flex">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-default-checkbox-{{ $i }}">
                                    <label for="hs-default-checkbox-{{ $i }}"
                                        class="text-sm font-light ms-3 dark:text-neutral-400">
                                        {{ $item }}
                                    </label>
                                </div>
                                <span class="text-xs text-gray-800 font-loght">({{ rand(1, 99) }})</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-2 mt-10">
                        <button type="button"
                            class="inline-flex items-center justify-center px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg cursor-pointer gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Apply Filter
                        </button>
                        <button type="button"
                            class="inline-flex items-center justify-center text-sm font-semibold text-blue-600 rounded-lg cursor-pointer gap-x-2 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
                            Reset
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-1 md:col-span-7">
                <div class="flex items-center justify-between gap-5">
                    <div class="font-light text-gray-800">Results: 100 Items</div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-light text-gray-800 dark:text-neutral-200">
                            Sort By :
                        </span>
                        <select
                            class="px-3 py-2 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Open this select menu</option>
                            <option>Product Newst</option>
                            <option>Product Latest</option>
                            <option>Product Price A-Z</option>
                            <option>Product Price Z-A</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 my-5 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                    @for ($i = 0; $i <= 10; $i++)
                        <x-single-product-card />
                    @endfor

                </div>
            </div>
        </div>
    </div>
</x-store-layout>
