<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BinhLuan;
use App\Models\PhanQuyen;
use App\Models\Player;
use App\Models\TaiKhoan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
    {

        // for ($i=1; $i < 5; $i++) {
        //     PhanQuyen::insert([
        //         'ten' => fake()->word(),
        //         'created_at' => fake()->dateTime(),
        //         'updated_at' => fake()->dateTime(),
        //     ]);
        // }

        // for ($i = 0; $i < 51; $i++) {
        //     TaiKhoan::insert([
        //         'ten' => fake()->name(),
        //         'ngay_sinh' => fake()->date(),
        //         'biet_danh' => fake()->word(),
        //         'gioi_tinh' => fake()->word(),
        //         'email' => fake()->email(),
        //         'sdt' => fake()->phoneNumber(),
        //         'cccd' => fake()->word(),
        //         'mat_khau' => fake()->word(),
        //         'so_du' => fake()->randomNumber(),
        //         'anh_dai_dien' => fake()->imageUrl(),
        //         'bi_cam' => fake()->boolean(),
        //         'phan_quyen_id' => 1,
        //         'created_at' => fake()->dateTime(),
        //         'updated_at' => fake()->dateTime(),
        //     ]);
        // }

        // anh	thong_tin	so_gio_duoc_thue	so_nguoi_theo_doi	gia_tien	trang_thai_player	tai_khoan_id	so_tai_khoan	so_lan_duoc_thue	created_at	updated_at


        // for ($i = 0; $i <= 50; $i++) {
        //     Player::insert([
        //         'anh' => fake()->imageUrl(),
        //         'thong_tin' => fake()->word(),
        //         'so_gio_duoc_thue' => fake()->randomNumber(),
        //         'so_nguoi_theo_doi' => fake()->randomNumber(),
        //         'gia_tien' => fake()->randomNumber(),
        //         'trang_thai_player' => fake()->word(),
        //         'tai_khoan_id' => rand(2, 50),
        //         'so_tai_khoan' => fake()->word(),
        //         'so_lan_duoc_thue' => fake()->randomNumber(),
        //         'created_at' => fake()->dateTime(),
        //         'updated_at' => fake()->dateTime(),
        //     ]);
        // }

        // noi_dung, tai_khoan_id, player_id, binh_luan_id, created_at, updated_at
        // for (
        //     $i = 0;
        //     $i < 100;
        //     $i++
        // ) {
        //     BinhLuan::insert([
        //         'noi_dung' => fake()->word(),
        //         'tai_khoan_id' => rand(2, 50),
        //         'player_id' => rand(2, 49),
        //         // 'binh_luan_id' => rand(2, 50),
        //         'created_at' => fake()->dateTime(),
        //         'updated_at' => fake()->dateTime(),
        //     ]);
        // }
    }
}
