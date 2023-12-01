<?php

namespace App\Http\Controllers;

use App\Models\Spv;
use Illuminate\Http\Request;

class SpvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Post::withCount('comments')->get();
        $spv = Spv::withCount('salesforce')->get();
        return view('spv', compact('spv'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spv  $spv
     * @return \Illuminate\Http\Response
     */
    public function show(Spv $spv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spv  $spv
     * @return \Illuminate\Http\Response
     */
    public function edit(Spv $spv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spv  $spv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spv $spv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spv  $spv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spv $spv)
    {
        //
    }
}
