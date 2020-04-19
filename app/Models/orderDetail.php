<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    protected $primaryKey = 'order_detail_id';

    protected $fillable = [
        'order_id',
        'product_id',
        'quanity',
        'unit_price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
