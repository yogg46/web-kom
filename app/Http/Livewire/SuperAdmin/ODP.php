<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Data_OPD;
use Livewire\Component;
use Livewire\WithPagination;

class ODP extends Component
{
    use WithPagination;


    public $select = 3;
    public $desa = '';
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetPage()
{
    $this->gotoPage(1);
}

    public function render()
    {

        if ($this->select == 1) {
         $data_opd = Data_OPD::search('nama_opd', $this->search)->paginate(9);
        }
        elseif($this->select == 2) {
            $data_opd = Data_OPD::whereNotNull('kecamatan')->search('nama_opd', $this->search)->search('kecamatan',$this->desa)->paginate(9);
        }else {
            $data_opd = Data_OPD::whereNull('kecamatan')->search('nama_opd', $this->search)->paginate(9);
        }

        return view('livewire.super-admin.o-d-p', [
            'OPD'=>$data_opd,
            'desaa'=>Data_OPD::whereNotNull('kecamatan')->pluck('kecamatan'),

        ])
            ->extends('layouts.main', [
                'tittle' => 'OPD',
            ])
            ->section('isi');
    }
}
