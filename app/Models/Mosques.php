<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mosques extends Authenticatable
{
    use HasFactory;

    protected $table = 'mosques';

    protected $fillable = [
        'unique_id',
        'mosque_name',
        'app_name',
        'method',
        'madhab',
        'gps_full',
        'email',
        'password',
        'country',
        'country_code',
        'city',
        'latitude',
        'longitude',
        'timezone_offset',
        'dst_offset',
        'qr_code',
        'qr_string',
        'message',
        'message_expire_date',
        'status',
        'annual_time',
        'logo',
        'iqamas',
        'm_settings',
        'm_12boolz',
        'latin_name',
        'message_switcher',
        'increase_isha_ramadan',
        'reduce_isha_ramadan',
        'summer_hour',
        'created_at',
        'updated_at',
    ];

    protected $hidden = ['password'];
}
