<?php

namespace App\Http\Livewire\PM;

use App\Models\Aplikasi;
use Livewire\Component;

class Antrian extends Component
{

    public function render()
    {
        return view('livewire.p-m.antrian')
            ->extends('layouts.main', [
                'tittle' => 'Antrian',

            ])
            ->section('isi');
    }

    public $items;

    protected $listeners = ['updateSort'];

    public function mount()
    {
        $this->items = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
    }

    public function updateSort($list)
    {
        foreach ($list as $item) {
            Aplikasi::find($item['value'])->update(['no_urut' => $item['order']]);
        }

        $this->items = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
    }
    public function confirmUpdate($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin akan mengupdate Antiran?',
            'text' => '',
            'id' => $id,
        ]);
    }
}
