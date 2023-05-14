<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tittle = "Dashboard";

        if (Auth::user()->role == 'Super Admin') {
            return redirect()->route('userManagement');
        }elseif(Auth::user()->role == 'Project Manager') {
            return redirect()->route('aplikasi-pm');
        }

        return view('home',['tittle'=>$tittle]);
    }
}
