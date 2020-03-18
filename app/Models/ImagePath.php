<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePath extends Model
{
    const OPERATION_TYPE_ADD = 1;

    const OPERATION_TYPE_UPDATE = 2;

    const OPERATION_TYPE_DELETE = 3;

    const IMAGE_PATH_HOLDER_PROFILE = 'users/%d/profile-images/';

    const IMAGE_TYPE_AGE_VERIFICATION = 2;

    const IMAGE_PATH_HOLDER_AGE_VERIFICATION = 'users/%d/age-verification-images/';

    const IMAGE_TYPE_SHOP_PACKAGE = 3;

    const IMAGE_PATH_SHOP_MENU_PACKAGE = 'shops/%d/packages/%d/';

    const IMAGE_PATH_SHOP_PROFILE = 1;

    const IMAGE_PATH_HOLDER_SHOP_PROFILE = 'shops/%d/profiles/';

    const IMAGE_PATH_SHOP_MENU_CAST_MEMBER = 'shops/%d/cast-members/%d/';

    protected $fillable = [
        'product_id',
        'image_type',
        'file_name',
        'image_url',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
