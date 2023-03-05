<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Pegawai extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'pegawais';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_pegawai'
            ]
        ];
    }
}
