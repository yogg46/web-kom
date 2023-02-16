<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserManagement extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.super-admin.user-management', [
            'user' => User::all(),
        ])
            ->extends('layouts.main', [
                'tittle' => 'User Management',
            ])
            ->section('isi');
    }
}
