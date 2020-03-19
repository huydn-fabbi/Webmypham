<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'product_id',
        'created_at',
        'updated_at',
    ];

    /**
     * fill able array.
     */
    protected $fillable = [
        'category_id',
        'brand_id',
        'promotion_id',
        'product_name',
        'description',
        'content',
        'price',
        'product_type',
        'product_amount',
        'is_archived',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }

    public function image_paths()
    {
        return $this->hasMany(ImagePath::class, 'product_id');
    }

    public function getProductTypeFormatAttribute($attribute)
    {
        return [
            '1' => 'No Type',
            '2' => 'New',
            '3' => 'Hot'
        ][$attribute];
    }
}
