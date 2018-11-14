<?php

namespace App\Http\Controllers;

use App\Models\Setting\Universe;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function landing()
    {
        return view('landing');
    }

    public function settings()
    {
        $universes = Universe::owned()->get();
        return view('setting.list', compact('universes'));
    }
}
