<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\DBConstant;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    /**
     * Append % to merchant fee rate.
     * @param $attribute
     * @return String
     * */
    public function getBasicMerchantFeeRateTitleAttribute($attribute)
    {
        return $attribute . '%';
    }

    //format target_type
    public function getTargetTypeTitleAttribute($attribute)
    {
        return [
            DBConstant::FOR_MEN => DBConstant::FOR_MEN_NAME,
            DBConstant::FOR_WOMEN => DBConstant::FOR_WOMEN_NAME,
            DBConstant::FOR_COUPLE => DBConstant::FOR_COUPLE_NAME,

        ][$attribute];
    }

    //format is_vip_only
    public function getIsVipOnlyTitleAttribute($attribute)
    {
        return [
            DBConstant::IS_VIP => DBConstant::IS_VIP_NAME,
            DBConstant::NO_VIP => DBConstant::NO_VIP_NAME,

        ][$attribute];
    }

    //format is_reservable
    public function getIsReservableTitleAttribute($attribute)
    {
        return [
            DBConstant::IS_RESERVABLE => DBConstant::IS_RESERVABLE_NAME,
            DBConstant::NO_RESERVABLE => DBConstant::NO_RESERVABLE_NAME,

        ][$attribute];
    }
}
