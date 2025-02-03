<?php
namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mosques extends Model
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
        'created_at',
        'updated_at',
    ];
}