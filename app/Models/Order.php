<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'voucher_no',
        'price',
        'qty',
        'status',
        'payment_slip',
        'note',
        'product_id',
        'user_id',
        'payment_id'
    ];
}
