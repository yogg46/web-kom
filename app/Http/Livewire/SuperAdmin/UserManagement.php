<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserManagement extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $name, $email, $role, $status, $ids, $password;
    public $search = '';
    protected $listeners = ['closeModal', 'delete', 'resetpass'];



    public function render()
    {
        return view('livewire.super-admin.user-management', [
            'user' => User::search('name', $this->search)
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ])
            ->extends('layouts.main', [
                'tittle' => 'User Management',
            ])
            ->section('isi');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            // 'username' => 'required|regex:/^\S*$/u|unique:users',
            'email' => 'required|email|unique:users',
            'role' => 'required',
        ]);

        $simpan = new User;

        $simpan->name = $this->name;
        $simpan->role = $this->role;
        $simpan->password = Hash::make('password');
        $simpan->email = $this->email;

        $simpan->save();
        // session()->alert('message', 'Data Berhasil Disimpan.');
        $this->emit('closeModal');
        $this->dispatchBrowserEvent('closeModal');
        $this->alert('success', 'Data Berhasil Disimpan');
        // $this->dispatchBrowserEvent('closeModal');
        $this->resetInput();
    }

    public function edit($id)
    {
        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        $this->name = $User->name;
        $this->email = $User->email;
        $this->role = $User->role;
        $this->status = $User->status;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|min:6|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'role' => 'required',
        ]);
        if ($this->ids) {
            $User = User::find($this->ids);
            $User->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
                'status' => $this->status,
            ]);

            // session()->flash('message', 'User Berhasil Diupdate.');
            // @dd($User);
            $this->emit('edit');
            $this->dispatchBrowserEvent('edit');
            $this->alert('success', 'User Berhasil Diupdate');
            $this->resetInput();

            // return redirect()->route('user');
        }
    }


    public function resetInput()
    {
        $this->name = null;
        $this->ids = null;
        $this->email = null;
        $this->role = null;
    }

    public function konfimasiReset($id)
    {
        $nama = User::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:confirmpass', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin akan mereset ' . $nama[0]->name . '?',
            'text' => '',
            'id' => $id,
        ]);
    }
    public function resetpass($id)
    {
        // $this->emit('resetpass');

        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        // $this->status = $User->status;
        $User = User::find($this->ids);
        $User->update([
            // 'status' => 1,
            'password' => $this->password = Hash::make('password')
        ]);


        $this->alert('success', 'Password ' . $User->name . ' Berhasil Direset');
        // return redirect()->route('karyawan.index');
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
        $User = User::where('id', $id)->first();
        User::where('id', $id)->delete();

        $this->alert('success', 'User ' . $User->name . ' Berhasil Dihapus');
    }
}
