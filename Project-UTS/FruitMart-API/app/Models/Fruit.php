<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'price_per_kg', 'category_id'
    ];
    protected $table = 'fruit';

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
