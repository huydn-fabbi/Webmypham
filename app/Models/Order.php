<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'date_order',
        'total',
        'payment',
        'note',
        'status'
    ];

    public function getStatusFormatAttribute($attribute)
    {
        return [
            '1' => 'Chưa hoàn thành',
            '2' => 'Hoàn Thành',
        ][$attribute];
    }
}
