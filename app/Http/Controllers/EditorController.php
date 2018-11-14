<?php

namespace App\Http\Controllers;

use App\Models\Setting\Universe;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function edit(Universe $universe) {
        return view('setting.edit', compact('universe'));
    }

    public function save(Request $request) {

    }
}
