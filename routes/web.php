<?php

use App\Http\Controllers\publikContoller;
use App\Http\Controllers\WhatappsGateway;
use App\Http\Livewire\PM\Antrian;
use App\Http\Livewire\PM\Aplikasipm;
use App\Http\Livewire\PM\Maintenance;
use App\Http\Livewire\PM\Perbaikan;
use App\Http\Livewire\PM\ShowAplikasipm;
use App\Http\Livewire\SuperAdmin\Aplikasi;
use App\Http\Livewire\SuperAdmin\ODP;
use App\Http\Livewire\SuperAdmin\Pegawai;
use App\Http\Livewire\SuperAdmin\Pengaduan;
use App\Http\Livewire\SuperAdmin\ShowOPD;
use App\Http\Livewire\SuperAdmin\ShowPegawai;
use App\Http\Livewire\SuperAdmin\UserManagement;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [publikContoller::class, 'index']);



Auth::routes();
// Route::view('/loogi', 'auth.login3');


Route::get('/whatapps', [WhatappsGateway::class, 'index'])->name('whatapps');
Route::post('/send-message', [WhatappsGateway::class, 'sendMessage'])->name('send-message');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
// Route::get('/post', Userm::class);
Route::middleware(['auth', 'checkRole:Super Admin'])->group(function () {
    Route::get('/user-management', UserManagement::class)->middleware('auth', 'checkRole:Super Admin')->name('userManagement');
    Route::get('/pegawai', Pegawai::class)->name('pegawai');
    Route::get('/pegawai/{slug}', ShowPegawai::class)->name('show-pegawai');
    Route::get('/opd', ODP::class)->name('opd');
    Route::get('/pengaduan', Pengaduan::class)->name('pengaduan');
    Route::get('/aplikasi', Aplikasi::class)->name('aplikasi');

    Route::get('/opd/{slug}', ShowOPD::class)->name('show-opd');
});

Route::middleware(['auth', 'checkRole:Project Manager'])->group(function () {

    Route::get('/antrian', Antrian::class)->name('antrian-pm');

    Route::get('/aplikasi-pm', Aplikasipm::class)->name('aplikasi-pm');

    Route::get('/aplikasi/{slug}', ShowAplikasipm::class)->name('show-aplikasi');
    Route::get('/maintenance', Maintenance::class)->name('maintenance');
    Route::get('/perbaikan', Perbaikan::class)->name('perbaikan');
});

// Route::get('/aplikasi-m/show-progress', function () {
//     $tittle = 'Aplikasi';
//     return view('show-aplikasi-progress', compact('tittle'));
// });
