<?php

namespace App\Http\Controllers\Setting;

use App\Models\Setting\Universe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $universe = $request->user()->universes()->create($request->all());
        return redirect(route('setting.edit', compact('universe')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function show(Universe $universe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function edit(Universe $universe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universe $universe)
    {
        $universe->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universe $universe)
    {
        //
    }
}
