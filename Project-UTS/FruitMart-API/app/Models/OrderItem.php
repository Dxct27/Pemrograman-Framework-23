<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'fruit_id', 'quantity'];
    protected $table = 'order_item';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function fruit()
    {
        return $this->belongsTo(Fruit::class);
    }
}
