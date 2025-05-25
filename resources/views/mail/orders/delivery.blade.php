@component('mail::message')
# Pesanan Anda Telah Dikirim, {{ $sales_order->full_name }} 🚚

Pesanan Anda dengan nomor **#{{ $sales_order->trx_id }}** telah dikirim dan sedang dalam perjalanan ke alamat tujuan.

---

## 📦 Informasi Pengiriman

- **Nomor Resi:** {{ $sales_order->shipping_receipt_number ?? 'Belum tersedia' }}
- **Kurir:** {{ $sales_order->shipping_courier }}
- **Layanan:** {{ $sales_order->shipping_service }}
- **Estimasi Tiba:** {{ $sales_order->shipping_estimated_delivery }}
- **Berat Paket:** {{ $sales_order->shipping_weight }} gram
- **Biaya Pengiriman:** {{ $sales_order->shipping_total_formatted }}

---

## 📍 Alamat Pengiriman

{{ $sales_order->address_line }}  
{{ $sales_order->destination_city }}, {{ $sales_order->destination_province }}, {{ $sales_order->destination_postal_code }}

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

Terima kasih telah berbelanja bersama kami 🙏  
Semoga pesanan Anda segera sampai dengan selamat.

@endcomponent
