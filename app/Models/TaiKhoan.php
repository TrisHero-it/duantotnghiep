<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;
    protected $table = 'tai_khoans';
    protected $fillable= [
        'ten','ngay_sinh','biet_danh','gioi_tinh','email','sdt','cccd','mat_khau','so_du','anh_dai_dien','bi_cam','phan_quyen_id',
    ];

}