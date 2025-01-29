<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $guard = 'admin';
    protected $table = 'documents';
    protected $fillable = [
        'user_id',
        'file_title',
        'file_name',
        'category_id',
        'description',
        'created_by',
        'status',
        'created_at',
        'updated_at'
    ];

}
