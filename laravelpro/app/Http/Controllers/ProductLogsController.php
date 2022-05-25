<?php

namespace App\Http\Controllers;

use App\Models\ProductLog;
use App\Http\Requests\StoreProductLogsRequest;
use App\Http\Requests\UpdateProductLogsRequest;

class ProductLogsController extends Controller
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
     * @param  \App\Http\Requests\StoreProductLogsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductLogsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductLogs  $productLogs
     * @return \Illuminate\Http\Response
     */
    public function show(ProductLog $productLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductLogs  $productLogs
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductLog $productLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductLogsRequest  $request
     * @param  \App\Models\ProductLogs  $productLogs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductLogsRequest $request, ProductLog $productLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductLogs  $productLogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductLog $productLogs)
    {
        //
    }
}
