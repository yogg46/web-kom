<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    use Sluggable;

    protected $guarded  = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_pengaduan'
            ]
        ];
    }
}
