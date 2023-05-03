<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public function order_items()
    {
        return $this->hasMany(order_items::class);
    }

    public function order_shipping_details()
    {
        return $this->hasOne(order_shipping_details::class);
    }
}