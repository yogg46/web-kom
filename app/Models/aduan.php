<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aduan extends Model
{
    use HasFactory;

    protected $fillable=[
        'judul_aplikasi',
        'cp',
        'deskripsi',
    ];
}
