@component('mail::message')
# Terima Kasih, {{ $sales_order->customer->full_name }} 🎉

Pesanan Anda dengan nomor **#{{ $sales_order->trx_id }}** telah berhasil dibuat.

---

## 🧾 Ringkasan Pesanan:

**Alamat Pengiriman:**  
{{ $sales_order->address_line }}  
{{ $sales_order->destination->city }}, {{ $sales_order->destination->province }}, {{ $sales_order->destination->postal_code }}

**Tanggal Pemesanan:**  
{{ $sales_order->created_at_formatted }}

---

## 🛍️ Item yang Dipesan

@component('mail::table')
| Produk         | Qty | Harga Satuan | Subtotal   |
|----------------|-----|---------------|------------|
@foreach ($sales_order->items as $item)
| {{ $item->name }} | {{ $item->quantity }} | {{ $item->price_formatted }} | {{ $item->total_formatted }} |
@endforeach
@endcomponent

---

## 💰 Rincian Pembayaran

- **Subtotal**: {{ $sales_order->sub_total_formatted }}  
- **Ongkir**: {{ $sales_order->shipping_total_formatted }}  
- **Total**: **{{ $sales_order->total_formatted }}**

---

@component('mail::button', ['url' => route('order-confirmed', $sales_order->trx_id)])
    Bayar Sekarang
@endcomponent

Terima kasih telah berbelanja bersama kami 🙏  
Kami akan segera memproses pesanan Anda.

@endcomponent
