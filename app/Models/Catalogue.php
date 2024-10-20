<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $table = 'danh_mucs';
    protected $fillable = [
        'name',
        'image',
        'published',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
}
