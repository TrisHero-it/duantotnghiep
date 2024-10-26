<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_danh_muc',
        'image',
        'trang_thai',
    ];

    protected $table = 'danh_mucs';
}
