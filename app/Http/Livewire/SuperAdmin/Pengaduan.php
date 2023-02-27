<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class Pengaduan extends Component
{
    public function render()
    {
        return view('livewire.super-admin.pengaduan', [])
            ->extends('layouts.main', [
                'tittle' => 'Pengaduan',
            ])
            ->section('isi');
    }
}
