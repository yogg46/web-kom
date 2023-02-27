<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class Aplikasi extends Component
{
    public function render()
    {
        return view('livewire.super-admin.aplikasi', [])
        ->extends('layouts.main', [
            'tittle' => 'Aplikasi',
        ])
        ->section('isi');
    }
}
