<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class OperatingCompanyUser extends Authenticatable
{
    use Notifiable;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'oc_user_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'oc_user_id',
        'created_at',
        'updated_at',
    ];

    //format authority_type
    public function getAuthorityTypeFormatAttribute($attribute)
    {
        return [
            1 => 'Admin',
            2 => 'Editor',
        ][$attribute];
    }
}
