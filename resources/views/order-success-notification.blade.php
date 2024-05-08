<div>
    <p>Dear {{ $order->user->name }},</p>
    
    <p>Your order with the following details has been completed:</p>
    
    <ul>
        <li><strong>Order ID:</strong> {{ $order->id }}</li>
        <li><strong>Total Amount:</strong> ${{ number_format($order->total, 2) }}</li>
        <!-- Add any other order details you want to include -->
    </ul>
    
    <p>Thank you for shopping with us!</p>
</div>