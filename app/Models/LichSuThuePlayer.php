<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichSuThuePlayer extends Model
{
    use HasFactory;
    public $fillable = [
        "tai_khoan_id",
        "player_id",
        "gia_player",
        "gio_thue",
        "trang_thai_thue"
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
    
    public function taiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'tai_khoan_id');
    }
	
}
