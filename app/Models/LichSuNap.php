<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichSuNap extends Model
{
    use HasFactory;

    protected $fillable = [];

    const TRANG_THAI_THANH_TOAN = [
        'Đang chờ xử lí',
        'Thành công',
        'Bị huỷ'
    ];

    public function taiKhoan()
    {

        return $this->belongsTo(TaiKhoan::class);
    }

    public function phuongThucThanhToan()
    {

        return $this->belongsTo(PhuongThucThanhToan::class);
    }

    public function getTrangThaiAttribute()
    {
        foreach (self::TRANG_THAI_THANH_TOAN as $key => $value) {
            if ($key == $this->trang_thai_thanh_toan) {
                return $value;
            }
        }
    }
}
