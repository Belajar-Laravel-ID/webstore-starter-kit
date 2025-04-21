<div class="flex items-center gap-5 pb-5 border-b border-gray-200">
    <div class="relative w-40 h-40 overflow-hidden rounded-xl">
        <img class="object-coversize-full"
            src="https://images.unsplash.com/photo-1546087513-2a2bc7fb6fa9?q=80&w=2487&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Product Name">
    </div>
    <div class="flex items-center">
        <div class="py-5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Product Name
            </h3>
            <h2 class="text-sm text-gray-800">Ebook, Software Engineer, Web Developer</h2>
            <div class="flex items-center gap-2 my-5">

                <div x-data="{ quantity: 1 }" class="flex gap-2 items-centerm y-5">
                    <div
                        class="inline-block px-3 py-2 bg-white border border-gray-200 rounded-lg dark:bg-neutral-900 dark:border-neutral-700">
                        <div class="flex items-center gap-x-1.5">
                            <button
                                class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-md cursor-pointer size-6 gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                @click="if(quantity > 0) quantity--">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </button>
                            <!-- Input jumlah -->
                            <input
                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white"
                                style="-moz-appearance: textfield;" type="number" x-model.number="quantity"
                                @input="if(quantity < 0) quantity = 0" min="0">


                            <!-- Tombol tambah -->
                            <button type="button"
                                class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-md cursor-pointer size-6 gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                @click="quantity++">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <p class="px-3 py-2 mt-1 text-xl font-semibold text-black dark:text-black">
                    Rp.123.456
                </p>


            </div>
        </div>
    </div>
</div>
