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
        'email',
        'password',
        'country',
        'city',
        'qr_code',
        'message',
        'message_expire_date',
        'status',
        'created_at',
        'updated_at',
    ];
}