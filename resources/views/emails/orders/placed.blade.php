@component('mail::message')
¡Tu pedido se envió con éxito!

<h3>Orden: </h3>
<li>Email : {{ $order->billing_email }}</li>
<li>Nombre : {{ $order->billing_name }}</li>
<li>Total : {{ $order->billing_total }}</li>
<h4>Productos: </h4>
@foreach ($order->products as $product)
    {{ $product->name }} : {{ $product->pivot->quantity }}
@endforeach

@component('mail::button', ['url' => config('app.url')])
Ir al sitio
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
