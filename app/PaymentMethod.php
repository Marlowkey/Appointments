<?php

namespace App;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'gcash_qr_code',  // QR Code image path
        'gcash_num',      // GCash number
    ];

    protected $table = 'payment_methods';
}
