<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    protected $primaryKey = 'promotion_id';

    protected $fillable = [
        'discount',
        'start_date',
        'end_date',
        'is_archived'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'promotion_id');
    }

    public function getDiscountAttribute($attribute)
    {
        return $attribute . '%';
    }

    public function getDiscountNumberAttribute($attribute)
    {
        return $attribute;
    }
}
