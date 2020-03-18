<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $primaryKey = 'brand_id';

    protected $fillable = [
        'brand_name',
        'is_archived'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
}
