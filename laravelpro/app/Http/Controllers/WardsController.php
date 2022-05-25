<?php

namespace App\Http\Controllers;

use App\Models\Wards;
use App\Http\Requests\StoreWardsRequest;
use App\Http\Requests\UpdateWardsRequest;

class WardsController extends Controller
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
     * @param  \App\Http\Requests\StoreWardsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWardsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wards  $wards
     * @return \Illuminate\Http\Response
     */
    public function show(Wards $wards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wards  $wards
     * @return \Illuminate\Http\Response
     */
    public function edit(Wards $wards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWardsRequest  $request
     * @param  \App\Models\Wards  $wards
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWardsRequest $request, Wards $wards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wards  $wards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wards $wards)
    {
        //
    }
}
