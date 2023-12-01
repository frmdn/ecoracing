<?php

namespace App\Http\Controllers;

use App\Models\Salesforce;
use Illuminate\Http\Request;

class SalesforceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesforce = Salesforce::all();
        return view('sales', compact('salesforce'));
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
     * @param  \App\Models\Salesforce  $salesforce
     * @return \Illuminate\Http\Response
     */
    public function show(Salesforce $salesforce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salesforce  $salesforce
     * @return \Illuminate\Http\Response
     */
    public function edit(Salesforce $salesforce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salesforce  $salesforce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salesforce $salesforce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salesforce  $salesforce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salesforce $salesforce)
    {
        //
    }
}
