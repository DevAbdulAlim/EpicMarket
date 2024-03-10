<div>
    <h2>Shopping Cart</h2>

    @if (count($cart) > 0)
        <ul>
            @foreach ($cart as $productId => $quantity )
            <li>
            Product ID: {{ $productId}} <br>
            Quantity: {{ $quantity }}
            </li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
