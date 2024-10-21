<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DangTin extends Model
{
    use HasFactory;

    protected $fillable = [
        "tai_khoan_id",
        "video",
        "luot_thich",
        "noi_dung"
    ];

    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class);
    }
}
