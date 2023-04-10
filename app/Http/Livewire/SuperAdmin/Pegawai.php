<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Pegawai as ModelsPegawai;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;



class Pegawai extends Component
{
    use WithPagination;
    use WithFileUploads;

    use LivewireAlert;
    public $nama_pegawai, $email, $jabatan, $status, $ids, $avatar, $cek, $update_avatar;
    public $search = '';
    public $preSe = '';
    protected $listeners = ['delete'];


    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        return view('livewire.super-admin.pegawai', [
            'pegawai' => User::search('name', $this->search)
                ->whereLike('role', $this->search)
                ->orderBy('created_at', 'desc')
                ->paginate(9),
        ])
            ->extends('layouts.main', [
                'tittle' => 'Pegawai',
            ])
            ->section('isi');
    }
    protected $rules = [
        'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
        'email' => 'required|email:email',
        'jabatan' => 'required',
        'role' => 'file|mimes:jpeg,png,jpg|max:12048'
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'jabatan' => 'required',
            'avatar' => 'file|mimes:jpeg,png,jpg|max:12048'
        ]);
    }
    public function resetInput()
    {
        $this->nama_pegawai = null;
        $this->ids = null;
        $this->email = null;
        $this->jabatan = '';
        $this->avatar = null;
        $this->update_avatar = null;
        $this->cek = 0;
    }
    public function save()
    {
        $this->validate();

        // $simpan = new User;
        // $simpan->name = $this->name;
        // $simpan->role = $this->role;
        // $simpan->password = Hash::make('password');
        // $simpan->email = $this->email;
        // $simpan->save();
        $nama_avatar = $this->avatar->store("images", 'public');
        $manager = new ImageManager();
        $image = $manager->make('storage/' . $nama_avatar)->fit(500, 500);
        $image->save('storage/' . $nama_avatar);

        // if ($image->height() > $image->width()) {
        //     $image->resize(100, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        // } else {
        //     $image->resize(null, 100, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        // }


        User::create([
            'name' => $this->nama_pegawai,
            'email' => $this->email,
            'role' => $this->jabatan,
            'avatar' => $nama_avatar,

        ]);
        // session()->alert('message', 'Data Berhasil Disimpan.');
        // $this->emit('closeModal');
        $this->dispatchBrowserEvent('closeModal');
        $this->alert('success', 'Data Berhasil Disimpan');
        // $this->dispatchBrowserEvent('closeModal');
        $this->resetInput();
    }

    public function edit($id)
    {
        $pegawai = User::where('id', $id)->first();
        $this->ids = $pegawai->id;
        $this->nama_pegawai = $pegawai->name;
        $this->email = $pegawai->email;
        $this->jabatan = $pegawai->role;
        $this->status = $pegawai->status;
        $this->avatar = $pegawai->avatar;
        $this->cek = 1;
    }

    public function update()
    {
        $this->validate([
            'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'jabatan' => 'required',
        ]);
        if (Storage::exists('public/' . $this->avatar)) {
            Storage::delete('public/' . $this->avatar);
            $this->alert('success', 'gambar Berhasil Diupdate');
        };
        $nama_avatarUP = $this->update_avatar->store("images", 'public');
        $manager = new ImageManager();
        // $deleteOld = $manager->make('storage/', $this->avatar);
        // $deleteOld->destroy();

        $image = $manager->make('storage/' . $nama_avatarUP)->fit(500, 500);
        $image->save('storage/' . $nama_avatarUP);
        if ($this->ids) {
            $pegawai = User::find($this->ids);
            $pegawai->update([
                'name' => $this->nama_pegawai,
                'email' => $this->email,
                'role' => $this->jabatan,
                // 'status' => $this->status,
                'avatar' => $nama_avatarUP
            ]);

            // session()->flash('message', 'User Berhasil Diupdate.');
            // @dd($User);
            $this->emit('edit');
            $this->dispatchBrowserEvent('edit');
            $this->alert('success', 'User Berhasil Diupdate');
            $this->resetInput();
        }
    }

    public function konfimasiDEL($id)
    {
        $nama = User::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin akan menghapus ' . $nama[0]->name . '?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {
        $Pegawai = User::where('id', $id)->first();
        if (Storage::exists('public/' . $Pegawai->avatar)) {
            Storage::delete('public/' . $Pegawai->avatar);
            $this->alert('success', 'gambar Berhasil Diupdate');
        };
        User::where('id', $id)->delete();

        $this->alert('success', 'Pegawai ' . $Pegawai->name . ' Berhasil Dihapus');
    }
}
