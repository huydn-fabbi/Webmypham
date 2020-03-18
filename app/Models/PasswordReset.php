<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $fillable = [
        'email',
        'token',
        'user_type',
        // 'authority_type'
    ];
}
