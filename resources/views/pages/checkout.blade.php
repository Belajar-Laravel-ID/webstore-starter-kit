<x-store-layout title="Checkout">
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid gap-5 md:gap-20 md:grid-cols-2">
            <div class="p-10">
                <!-- Section -->
                <div
                    class="py-6 border-t border-gray-200 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium dark:text-white">
                        Billing contact
                    </label>

                    <div class="grid grid-cols-2 gap-3 mt-2">
                        <div class="col-span-2">
                            <input id="af-payment-billing-contact" type="text"
                                class="border-red-600 py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Full Name">
                            <p class="mt-2 text-xs text-red-600" id="hs-validation-name-error-helper">
                                Customer Name Error Message</p>
                        </div>
                        <div>
                            <input type="text"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Email">
                        </div>
                        <div>
                            <input type="text"
                                class="border-red-600 py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Phone Number">
                            <p class="mt-2 text-xs text-red-600" id="hs-validation-name-error-helper">
                                Phone Error Message</p>
                        </div>
                    </div>
                </div>
                <!-- Section -->
                <div
                    class="py-6 mt-5 border-t border-gray-200 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                    <label for="af-payment-billing-address" class="inline-block text-sm font-medium dark:text-white">
                        Billing address
                    </label>

                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-address" type="text"
                            class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Street Address">
                        <p class="mt-2 text-xs text-red-600" id="hs-validation-name-error-helper">Street Address Error
                            Message</p>
                        <div>
                            <div x-data="{ open: false }" class="relative w-full">
                                <input type="text"
                                    @focus="open = true" @click.outside="open = false"
                                    class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Cari Lokasi">

                                <ul class="absolute z-10 w-full mt-1 overflow-y-auto bg-white border border-gray-200 rounded-b-lg max-h-60"
                                    x-show="open">
                                    <li class="p-2 cursor-pointer hover:bg-gray-100">
                                        Cikutra, Kota Bandung
                                    </li>
                                </ul>

                                <p class="mt-2 text-sm text-gray-600">
                                    Lokasi Dipilih
                                    <strong>Cikutra, Kota Bandung, 401900</strong>
                                </p>
                            </div>
                            <p class="mt-2 text-xs text-red-600" id="hs-validation-name-error-helper">
                                Pesan Error</p>
                        </div>
                    </div>
                </div>
                <!-- End Section -->
                <label for="af-shipping-method" class="inline-block text-sm font-medium dark:text-white">
                    Shipping Method
                </label>
                <div class="mt-2 space-y-3">
                    <div class="grid space-y-2">
                        <div class="text-xs font-bold">
                            Regular
                        </div>
                        @for ($i = 1; $i <= 3; $i++)
                            <label for="shipping_method_{{ $i }}"
                                class="flex items-center justify-between w-full gap-2 p-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <div class="flex items-center justify-start gap-2">
                                    <input type="radio" name="shipping_method" value="{{ $i }}"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="shipping_method_{{ $i }}">
                                    <img src="{{ asset('images/shipping/jntexpress.svg') }}" class="h-5" />

                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">JNT
                                        - YES
                                        <span class="text-xs text-gray-500">(1-2 Day)</span>
                                    </span>
                                </div>
                                <span class="text-sm text-gray-800">
                                    Rp.123.123
                                </span>
                            </label>
                        @endfor
                        <div class="text-xs text-red-600">Fill Shipping Address First</div>
                    </div>
                </div>

                <label for="af-payment-method" class="inline-block mt-5 text-sm font-medium dark:text-white">
                    Payment Method
                </label>
                <div class="mt-2 space-y-3">
                    <div class="grid space-y-2">
                        @php
                            $payment_methods = [
                                'Bank Transfer - BCA',
                                'Bank Transfer - BNI',
                                'Virtual Account BCA',
                                'QRIS',
                                'Dana',
                            ];
                        @endphp
                        @foreach ($payment_methods as $key => $item)
                            <label for="payment_method_{{ $key }}"
                                class="flex w-full p-2 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input type="radio" name="hs-vertical-radio-in-form"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="payment_method_{{ $key }}">
                                <span
                                    class="text-sm text-gray-500 ms-3 dark:text-neutral-400">{{ $item }}</span>
                            </label>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="p-10">
                <h1 class="mb-5 text-2xl font-light">Order Summary</h1>
                <div>
                    @for ($i = 1; $i < 5; $i++)
                        <x-single-product-list />
                    @endfor
                </div>
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
                                <span class="flex flex-col">
                                    <span>Shipping (JNT YES)</span>
                                    <span class="text-xs">570 gram</span>
                                </span>
                                <span>Rp.123.123</span>
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
                    <button type="button" onclick="window.location.href='/order-confirmed'"
                        class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Place an Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>
