<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class ODP extends Component
{
    public function render()
    {
        return view('livewire.super-admin.o-d-p', [])
            ->extends('layouts.main', [
                'tittle' => 'OPD',
            ])
            ->section('isi');
    }
}
