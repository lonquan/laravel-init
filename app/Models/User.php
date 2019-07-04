<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;

    protected $table = 'users';

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'nickname',
        'avatar',
        'phone',
        'sex',
        'wx_official_account_openid',
        'wx_union_id',
        'wx_province',
        'wx_city',
        'wx_country',
        'created_at',
    ];

    protected $casts = [
        'is_merchant' => 'boolean',
        'created_at'  => 'date',
    ];
}
