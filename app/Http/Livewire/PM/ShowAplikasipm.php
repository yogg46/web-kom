<?php

namespace App\Http\Livewire\PM;

use App\Http\Controllers\WhatappsGateway;
use App\Models\Aplikasi;
use App\Models\Progres;
use App\Models\Tim;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ShowAplikasipm extends Component
{
    use LivewireAlert;
    public $aplikasis;
    public $progres;
    public $tim;
    public $slug;
    public $notif = 0;

    public function render()
    {
        return view('livewire.p-m.show-aplikasipm')
            ->extends('layouts.main', [
                'tittle' => $this->aplikasis->nama_aplikasi,

            ])
            ->section('isi');
    }

    public function mount($slug)
    {
        $this->aplikasis = Aplikasi::where('slug', $slug)->first();
        $this->slug = $slug;
        $this->progres = Progres::where('id_aplikasi', $this->aplikasis->id)->get();
        $this->tim = Tim::where('id_aplikasi', $this->aplikasis->id)->get();
    }


    public $disposisi;
    public $analisis_awal;
    public $tolak;
    public $alasan_tolak;

    public function simpan_disposisi()
    {

        $this->validate([
            'disposisi' => 'required',

        ]);

        $this->aplikasis->update([
            'status_projek' => 'Disposisi Surat'
        ]);
        $cek = Progres::where('id_aplikasi', $this->aplikasis->id)->where('status', 'Disposisi Surat')->get();
        if ($cek->count() > 0) {
            foreach ($cek as $key) {
                $key->delete();
            }
        }
        Progres::create([
            'tanggal' => Carbon::parse($this->disposisi)->format('Y-m-d H:i:s'),
            'status' => 'Disposisi Surat',
            'id_aplikasi' => $this->aplikasis->id,
        ]);
        if ($this->notif == 1) {
            $controller = new WhatappsGateway();
            $pesan = 'Aplikasi ' . $this->aplikasis->nama_aplikasi . ' sedang dalam proses *Disposisi Surat* Pada Tanggal ' . Carbon::parse($this->disposisi)->format('d F Y');
            $controller->kirim($this->aplikasis->cp, $pesan);
            $this->reset('notif');
        }

        $this->alert('success', 'Data Berhasil Disimpan');
        $this->dispatchBrowserEvent('Disposisi-Surat');

        $this->mount($this->slug);
    }






    public function simpan_analisis_awal()
    {
        $this->validate([
            'analisis_awal' => 'required',

        ]);


        $this->aplikasis->update([
            'status_projek' => 'Analisis Awal'
        ]);
        $cek = Progres::where('id_aplikasi', $this->aplikasis->id)->where('status', 'Analisis Awal')->get();
        if ($cek->count() > 0) {
            foreach ($cek as $key) {
                $key->delete();
            }
        }
        Progres::create([
            'tanggal' => Carbon::parse($this->analisis_awal)->format('Y-m-d H:i:s'),
            'status' => 'Analisis Awal',
            'id_aplikasi' => $this->aplikasis->id,
        ]);
        if ($this->notif == 1) {
            $controller = new WhatappsGateway();
            $pesan = 'Aplikasi ' . $this->aplikasis->nama_aplikasi . ' sedang dalam proses *Analisis Awal* Pada Tanggal ' . Carbon::parse($this->disposisi)->format('d F Y');
            $controller->kirim($this->aplikasis->cp, $pesan);
            $this->reset('notif');
        }

        $this->alert('success', 'Data Berhasil Disimpan');
        $this->dispatchBrowserEvent('Analisis-Awal');

        $this->mount($this->slug);
    }




    public function simpan_ditolak()
    {
        $this->validate([
            'tolak' => 'required',
            'alasan_tolak' => 'required'
        ], [
            'tolak.required' => 'Kolom Tanggal harus diisi.',
            'alasan_tolak.required' => 'Kolom Alasan ditolak harus diisi.'
        ]);
        $this->aplikasis->update([
            'status_projek' => 'Ditolak',
            'status_aplikasi' => 'Ditolak'
        ]);
        $cek = Progres::where('id_aplikasi', $this->aplikasis->id)->where('status', 'Ditolak')->get();
        if ($cek->count() > 0) {
            foreach ($cek as $key) {
                $key->delete();
            }
        }
        Progres::create([
            'tanggal' => Carbon::parse($this->tolak)->format('Y-m-d H:i:s'),
            'status' => 'Ditolak',
            'id_aplikasi' => $this->aplikasis->id,
            'catatan' => $this->alasan_tolak,
        ]);
        if ($this->notif == 1) {
            $controller = new WhatappsGateway();
            $pesan = 'Aplikasi ' . $this->aplikasis->nama_aplikasi . ' telah *Ditolak* karena ' . $this->alasan_tolak . ' Pada Tanggal ' . Carbon::parse($this->disposisi)->format('d F Y');
            $controller->kirim($this->aplikasis->cp, $pesan);
            $this->reset('notif');
        }

        $this->alert('success', 'Data Berhasil Disimpan');
        $this->dispatchBrowserEvent('Tolak-Projek-Aplikasi');

        $this->mount($this->slug);
    }
}
