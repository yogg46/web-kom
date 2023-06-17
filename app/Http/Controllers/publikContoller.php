<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
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
}
