<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrderRecord extends Model
{
    use HasFactory;

    const ACTION_BUY = 'buy';
    const ACTION_SELL = 'sell';

    public $fillable = [
        'user_id',
        'robot_uid',
        'exchange_order_id',
        'symbol',
        'action',
        'exchange_order_id',
        'price',
        'cost',
        'quantity',
        'fee',
        'order_created_at',
    ];
}
