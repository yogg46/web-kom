<?php

namespace App\Http\Livewire\PM;

use App\Http\Controllers\WhatappsGateway;
use App\Models\Aplikasi;
use App\Models\Progres;
use App\Models\Tim;
use App\Models\User;
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
    public $sa;
    public $qa;
    public $pm;
    public $pg = [];
    public $no_urut;
    public $prioritas;

    public function render()
    {
        $norut = [];
        $apk = Aplikasi::whereNotnull('no_urut')->pluck('nama_aplikasi', 'no_urut');
        for ($i = 1; $i < 21; $i++) {
            if (isset($apk[$i])) {
                array_push($norut, $apk[$i]);
            } else {

                array_push($norut, null);
            }
            // if (isset($norut[$i])) {
            //     $norut[] = '';
            // }
        }
        $newKeys = range(1, count($norut));

        // Combine the new keys with the original values
        $newArray = array_combine($newKeys, $norut);

        // dd($newArray);
        return view('livewire.p-m.show-aplikasipm', [
            'PM' => User::where('role', 'Project Manager')->pluck('name', 'id'),
            'QA' => User::where('role', 'Quality Assurance')->pluck('name', 'id'),
            'SA' => User::where('role', 'System Analyst')->pluck('name', 'id'),
            'PG' => User::where('role', 'Programmer')->pluck('name', 'id'),
            'norut' => $newArray,
        ])
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
            $pesan = 'Aplikasi ' . $this->aplikasis->nama_aplikasi . ' sedang dalam proses *Analisis Awal* Pada Tanggal ' . Carbon::parse($this->analisis_awal)->format('d F Y');
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
            $pesan = 'Aplikasi ' . $this->aplikasis->nama_aplikasi . ' telah *Ditolak* karena ' . $this->alasan_tolak . ' Pada Tanggal ' . Carbon::parse($this->tolak)->format('d F Y');
            $controller->kirim($this->aplikasis->cp, $pesan);
            $this->reset('notif');
        }

        $this->alert('success', 'Data Berhasil Disimpan');
        $this->dispatchBrowserEvent('Tolak-Projek-Aplikasi');

        $this->mount($this->slug);
    }

    public function simpan_antrian()
    {
        $this->validate([
            'prioritas' => 'required',
            'no_urut' => 'required',
            'pm' => 'required',
            'qa' => 'required',
            'sa' => 'required',
            'pg' => 'required',
        ], [
            'prioritas.required' => 'Kolom Prioritas Aplikasi harus diisi.',
            'no_urut.required' => 'Kolom Nomor Antrian Aplikasi harus diisi.',
            'pm.required' => 'Kolom Project Managerharus diisi.',
            'qa.required' => 'Kolom Quality Assurance harus diisi.',
            'sa.required' => 'Kolom System Analyst harus diisi.',
            'pg.required' => 'Kolom Programmer harus diisi.',
        ]);



        $this->aplikasis->update([
            'status_aplikasi' => 'Antrian',
            'prioritas' => $this->prioritas,
            // 'no_urut'=> $this->no_urut,
        ]);
        $nomorUrutTerbesar = Aplikasi::max('no_urut');
        if (Aplikasi::where('no_urut', $this->no_urut)->exists()) {
            Aplikasi::where('no_urut', '>=', $this->no_urut)->increment('no_urut');
        }
        $this->aplikasis->update([
            'no_urut' => $this->no_urut,
        ]);


        Tim::create([
            'id_aplikasi' => $this->aplikasis->id,
            'id_user' => $this->pm,
            'role' => 'Project Manager'

        ]);
        Tim::create([
            'id_aplikasi' => $this->aplikasis->id,
            'id_user' => $this->sa,
            'role' => 'System Analyst'

        ]);
        Tim::create([
            'id_aplikasi' => $this->aplikasis->id,
            'id_user' => $this->qa,
            'role' => 'Quality Assurance'

        ]);

        foreach ($this->pg as $key) {
            // dd($value);
            Tim::create([
                'id_aplikasi' => $this->aplikasis->id,
                'id_user' => $key,
                'role' => 'Programmer'

            ]);
        }

        if ($this->notif == 1) {
            $controller = new WhatappsGateway();
            $pesan = 'Aplikasi ' . $this->aplikasis->nama_aplikasi . ' dalam proses *Antrian Ke ' . $this->no_urut . '*';
            $controller->kirim($this->aplikasis->cp, $pesan);
            $this->reset('notif');
        }
        $this->mount($this->slug);
        $this->dispatchBrowserEvent('Antrian-Aplikasi');
    }
}
