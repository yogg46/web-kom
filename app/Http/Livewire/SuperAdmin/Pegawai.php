<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;

class Pegawai extends Component
{
    public function render()
    {
        return view('livewire.super-admin.pegawai', [])
            ->extends('layouts.main', [
                'tittle' => 'Pegawai',
            ])
            ->section('isi');
    }
}
