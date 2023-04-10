<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();
        // Pegawai::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'Super Admin',
            'status' => 'aktif',

        ]);

        \App\Models\User::factory()->create([
            'name' => 'Project Manager',
            'email' => 'pm@pm.com',
            'password' => bcrypt('password'),
            'role' => 'Project Manager',
            'status' => 'aktif',

        ]);
    }
}
