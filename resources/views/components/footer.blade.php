<!-- ========== FOOTER ========== -->
<footer class="w-full mt-auto bg-gray-900 dark:bg-neutral-950">
    <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-3">
            <div class="col-span-full lg:col-span-1">
                <a class="flex-none text-xl font-semibold text-white focus:outline-hidden focus:opacity-80" href="#"
                    aria-label="Brand">Brand</a>
                <div class="my-5 text-gray-500 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores mollitia distinctio,
                    doloribus,
                    molestias numquam voluptatibus explicabo vel deserunt voluptates, quod minus itaque dolore in
                    obcaecati? Quis laborum autem tempora porro?
                </div>
            </div>
            <!-- End Col -->

            <div class="grid col-span-1 gap-5">
                <div>
                    <h4 class="font-semibold text-gray-100">Shipping Method</h4>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <div class="max-h-10">
                            <img src="{{ asset('images/shipping/idexpress.webp') }}" alt="idexpress" />
                        </div>
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/shipping/jne.svg') }}" alt="jne" />
                        </div>
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/shipping/jntexpress.svg') }}" alt="jnt" />
                        </div>
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/shipping/ninjaexpress.webp') }}" alt="ninja" />
                        </div>
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/shipping/sicepat.webp') }}" alt="sicepat" />
                        </div>

                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-100">Payment Method</h4>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/bank/bca-bank-central-asia.svg') }}" class="h-10 p-2"
                                alt="bca" />
                        </div>
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/bank/bank-mandiri.svg') }}" class="h-10 p-2" alt="mandiri" />
                        </div>
                        <div class="flex items-center px-2 bg-white">
                            <img src="{{ asset('images/bank/bank-negara-indonesia.svg') }}" class="h-10 p-2"
                                alt="BNI" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-span-1">
                <h4 class="font-semibold text-gray-100">Help</h4>

                <div class="grid mt-3 space-y-3">
                    <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="{{ route('page') }}">Term & Conditions</a></p>
                    <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="{{ route('page') }}">Privacy</a></p>
                    <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 focus:outline-hidden focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="{{ route('page') }}">Customers</a></p>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="flex justify-center mt-5 sm:mt-12 gap-y-2 sm:gap-y-0">
            <p class="text-sm text-gray-400 dark:text-neutral-400">
                © 2025 {{ config('app.name') }}
            </p>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
