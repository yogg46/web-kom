<?php

use App\Http\Livewire\SuperAdmin\Aplikasi;
use App\Http\Livewire\SuperAdmin\ODP;
use App\Http\Livewire\SuperAdmin\Pegawai;
use App\Http\Livewire\SuperAdmin\Pengaduan;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::view('/loogi', 'auth.login3');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
// Route::get('/post', Userm::class);
Route::get('/user-management', UserManagement::class)->middleware('auth','checkRole:Super Admin')->name('userManagement');
Route::get('/pegawai', Pegawai::class)->name('pegawai');
Route::get('/pegawai/{slug}', ShowPegawai::class)->name('show-pegawai');
Route::get('/opd', ODP::class)->name('opd');
Route::get('/pengaduan', Pengaduan::class)->name('pengaduan');
Route::get('/aplikasi', Aplikasi::class)->name('aplikasi');

