<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TravelPackage;
use Illuminate\Http\Request;

class TravelPackagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::all();

        return view('pages.admin.travel-package.index', ['items' => $items]);
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
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function show(TravelPackage $travelPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(TravelPackage $travelPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TravelPackage $travelPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TravelPackage  $travelPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelPackage $travelPackage)
    {
        //
    }
}
