<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $fillable = [
        'user_id',
        'file_name',
        'description',
        'created_by',
        'status',
        'created_at',
        'updated_at'
    ];
}
