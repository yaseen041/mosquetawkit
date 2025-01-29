<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'user_id',
        'amount',
        'created_date',
        'created_by',
        'status',
        'trx_id',
        'trx_amount',
        'trx_date',
        'trx_email',
        'created_at',
        'updated_at'
    ];
}
