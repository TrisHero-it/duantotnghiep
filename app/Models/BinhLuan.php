<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tai_khoan_id',
        'player_id',
        'binh_luan_id',
        'noi_dung',
        'trang_thai',
    ];

    // $table->string('noi_dung');
    // $table->foreignIdFor(TaiKhoan::class)->constrained();
    // $table->foreignIdFor(Player::class)->constrained();
    // $table->foreignIdFor(BinhLuan::class)->constrained()->cascadeOnDelete();

    public function user()
    {
        return $this->belongsTo(TaiKhoan::class, 'tai_khoan_id', 'id');
    }

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id', 'id');
    }

    public function binhLuan()
    {
        return $this->belongsTo(BinhLuan::class, 'binh_luan_id', 'id');
    }
}
