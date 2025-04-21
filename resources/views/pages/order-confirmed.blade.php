<x-store-layout>
    @push('head')
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js" defer></script>
        <script type="text/javascript" defer>
            window.addEventListener("load", function() {
                confetti({
                    particleCount: 100,
                    spread: 70,
                    origin: {
                        y: 0.6
                    }
                });
            });
        </script>
    @endpush

    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="w-full p-5 mx-auto md:w-1/2">
            <div class="relative flex flex-col bg-white shadow-lg pointer-events-auto rounded-xl dark:bg-neutral-800">
                <div class="relative overflow-hidden text-center bg-gray-900 min-h-32 rounded-t-xl dark:bg-neutral-950">

                    <!-- SVG Background Element -->
                    <figure class="absolute inset-x-0 bottom-0 -mb-px">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            viewBox="0 0 1920 100.1">
                            <path fill="currentColor" class="fill-white dark:fill-neutral-800"
                                d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                        </svg>
                    </figure>
                    <!-- End SVG Background Element -->
                </div>

                <div class="relative z-10 -mt-12">
                    <!-- Icon -->
                    <span
                        class="mx-auto flex justify-center items-center size-15.5 rounded-full border border-gray-200 bg-white text-gray-700 shadow-2xs dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400">
                        <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                            <path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                    <!-- End Icon -->
                </div>

                <!-- Body -->
                <div class="p-4 overflow-y-auto sm:p-7">
                    <div class="text-center">
                        <h3 id="hs-ai-modal-label" class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Invoice from {{ config('app.name') }}
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Invoice #3682303
                        </p>
                    </div>

                    <!-- Grid -->
                    <div class="grid grid-cols-1 gap-5 mt-5 sm:mt-10 sm:grid-cols-3">
                        <div>
                            <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Amount
                                paid:</span>
                            <span
                                class="block text-sm font-medium text-gray-800 dark:text-neutral-200">Rp.123.123</span>
                        </div>
                        <!-- End Col -->

                        <div>
                            <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Date paid:</span>
                            <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">April 22,
                                2020</span>
                        </div>
                        <!-- End Col -->

                        <div>
                            <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Payment
                                method:</span>
                            <div class="flex items-center gap-x-2">
                                <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">Bank
                                    Transfer BCA</span>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 sm:mt-10">
                        <h4 class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">Summary</h4>

                        <ul class="flex flex-col mt-3">
                            <li
                                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>BCA Account Name</span>
                                    <span>Rezza Kurniawan</span>
                                </div>
                            </li>
                            <li
                                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Bank Account Number</span>
                                    <span>123123-123</span>
                                </div>
                            </li>
                            <li
                                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Unique Code</span>
                                    <span>Rp.123</span>
                                </div>
                            </li>
                            <li
                                class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border border-gray-200 gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Total Transfer</span>
                                    <span>Rp.123.123</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="block my-2">
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Please Transfer Until Last 3 Digits</p>
                    </div>

                    <!-- Button -->
                    <a href="#"
                        class="block w-full px-3 py-2 font-medium text-center text-white bg-blue-600 border border-transparent rounded-lg text-md gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Check Status Payment
                    </a>
                    <!-- End Buttons -->

                    <div class="my-5 hs-accordion-group">
                        <div class="hs-accordion active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                            <button
                                class="inline-flex items-center justify-between w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-hidden dark:focus:text-neutral-400"
                                aria-expanded="true"
                                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                Product Summaries
                                <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                                <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"></path>
                                </svg>
                            </button>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                @for ($i = 0; $i <= 5; $i++)
                                    <x-single-product-list />
                                @endfor
                            </div>

                        </div>
                    </div>
                    <!-- End Body -->
                </div>
            </div>
        </div>
    </div>
</x-store-layout>
