<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class publikContoller extends Controller
{
    public function index(Request $request)
    {

        // $selectedItem = $request->query('selected_item');
        $antri = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
        // $app = Aplikasi::paginate(6);
        // $app->appends(['selected_item' => $selectedItem]);
        return view('welcome', ['antri' => $antri]);
    }


    public function app()
    {

        $tittle = 'Aplikasi';
        // $app = Aplikasi::all();
        return view('app-publik', compact(['tittle']));
    }


    public function showapp($id)
    {
        $app = Aplikasi::where('slug', $id)->first();
        $tittle = $app->nama_aplikasi;
        $slug = '/app';
        $slugname = 'aplikasi';
        return view('show-app', compact(['tittle', 'app', 'slugname', 'slug']));
    }

    public function waitinglist()
    {

        $tittle = 'Antrian Aplikasi';
        $slug = '/waiting-list';
        $slugname = 'Antrian';
        $list = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
        return view('waiting-list', compact(['tittle', 'list', 'slug', 'slugname']));
    }

    public function pemeliharaan()
    {
        $slug = '/pemeliharaan';
        $slugname = 'Pemeliharaan';
        $list = Pengaduan::where('status', '<>', 'Selesai')->get();
        $tittle = 'Pemeliharaan';
        return view('pemeliharaan', compact(['tittle', 'slug', 'slugname','list']));
    }
}
