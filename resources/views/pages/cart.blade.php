<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid gap-10 md:grid-cols-10">
            <div class="md:col-span-7">
                <h1 class="mb-5 text-2xl font-light">Shopping Bag</h1>
                <div class="grid gap-5">
                    @for ($i = 0; $i <= 4; $i++)
                        <x-single-product-cart />
                    @endfor
                </div>
            </div>
            <div class="md:col-span-3">
                <h1 class="mb-5 text-2xl font-light">Order Summary</h1>
                <div class="grid gap-5">
                    <!-- List Group -->
                    <ul class="flex flex-col mt-3">
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Sub Total</span>
                                <span>Rp123,456</span>
                            </div>
                        </li>
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Shipping</span>
                                <span>—</span>
                            </div>
                        </li>
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Total</span>
                                <span>Rp123,456</span>
                            </div>
                        </li>
                    </ul>
                    <!-- End List Group -->
                    <button type="button" onclick="window.location.href='/checkout'"
                        class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg cursor-pointer gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Checkout Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>
