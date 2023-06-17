<?php

namespace App\Http\Livewire\Publik;

use App\Models\Aplikasi;
use Livewire\Component;
use Livewire\WithPagination;

class AppPublik extends Component
{
    use WithPagination;
    public function gotoPage($page)
    {
        $this->page = $page;
    }
    public function render()
    {
        $app = Aplikasi::paginate(6);
        return view('livewire.publik.app-publik', [
            'app' => $app,
            'antri' => Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get(),
        ])->extends('welcome')
            ->section('app');
    }
}
