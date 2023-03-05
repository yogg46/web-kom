<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Pegawai;
use Livewire\Component;

class ShowPegawai extends Component
{

    public $pegawai ;
    public function mount($slug)
    {
        $this->pegawai = Pegawai::where('slug',$slug)->first();
    }
    public function render()
    {
        return view('livewire.super-admin.show-pegawai')
        ->extends('layouts.main', [
            'tittle' => 'Pegawai',
        ])
        ->section('isi');
    }
}
