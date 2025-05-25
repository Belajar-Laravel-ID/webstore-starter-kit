<div 
  x-data="{
    toasts: [],

    listenForEvent() {
      window.Echo.channel('orders')
        .listen('.orders', (e) => {
          this.addToast(
            'Pesanan Baru',
            `${e.customer_name} Baru saja membeli ${e.product_qty} buah ${e.product}`
          );
        });
    },

    addToast(title, message) {
      const id = Date.now();
      this.toasts.push({ id, title, message });

      setTimeout(() => {
        this.toasts = this.toasts.filter(t => t.id !== id);
      }, 4000);
    }
  }"
  x-init="listenForEvent()" 
  class="fixed bottom-[10px] right-[10px] z-50 space-y-3"
>
  <template x-for="toast in toasts" :key="toast.id">
    <div 
      x-show="true" 
      x-transition 
      class="max-w-xs bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-neutral-800 dark:border-neutral-700" 
      role="alert"
    >
      <div class="flex p-4">
        <div class="shrink-0">
          <svg class="size-5 text-teal-500 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
          </svg>
        </div>
        <div class="ms-4">
          <h3 class="text-gray-800 font-semibold dark:text-white" x-text="toast.title"></h3>
          <div class="mt-1 text-sm text-gray-600 dark:text-neutral-400" x-text="toast.message"></div>
        </div>
      </div>
    </div>
  </template>
</div>
