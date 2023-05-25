<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;
    // protected $guarded  = ['id'];

    protected $fillable = [
        'status',
        'tanggal',
        'id_aplikasi',
        'catatan',
    ];

    protected $casts = [
        'tanggal' => 'datetime'
    ];
}
