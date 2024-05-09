<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'invoice_number',
        'transaction_id',
        'paid',
        'payment_date',
        'payment_method',
    ];

    /**
     * Get the order associated with the invoice.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
