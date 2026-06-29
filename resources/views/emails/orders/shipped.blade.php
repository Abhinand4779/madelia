<x-mail::message>
# Order Shipped!

Hello {{ $order->customer_name }},

Great news! Your order (ORD-{{ $order->id }}) has been shipped.

**Courier:** {{ $order->tracking_provider }}  
**Tracking Number:** {{ $order->tracking_number }}

<x-mail::button :url="config('app.url')">
Visit Store
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
