<?php

namespace App\Http\Controllers;

use App\Models\Setting\Universe;

class NavigationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        return auth()->guest() ? $this->landing() : $this->dashboard();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard');
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
