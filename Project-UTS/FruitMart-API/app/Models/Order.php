<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'date'];
    protected $table = 'order';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function fruit()
    {
        return $this->belongsTo(Fruit::class);
    }
}
