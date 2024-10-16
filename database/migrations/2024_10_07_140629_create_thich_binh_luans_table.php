<?php

use App\Models\BinhLuan;
use App\Models\TaiKhoan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thich_binh_luans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TaiKhoan::class)->constrained();
            $table->string('thich');
            $table->string('khong_thich');
            $table->foreignIdFor(BinhLuan::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thich_binh_luans');
    }
};
