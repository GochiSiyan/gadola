<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommerceDataRequest;
use App\Http\Requests\UpdateCommerceDataRequest;
use App\Models\CommerceData;

class CommerceDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commerceData = CommerceData::all();
        return response()->json($commerceData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommerceDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommerceDataRequest $request)
    {
        $commerceData = CommerceData::create($request->validated());
        return response()->json(['message' => 'Commerce data created', 'commerceData' => $commerceData]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommerceData  $commerceData
     * @return \Illuminate\Http\Response
     */
    public function show(CommerceData $commerceData)
    {
        return response()->json($commerceData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommerceDataRequest  $request
     * @param  \App\Models\CommerceData  $commerceData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommerceDataRequest $request, CommerceData $commerceData)
    {
        $commerceData->update($request->validated());
        return response()->json(['message' => 'Commerce data updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommerceData  $commerceData
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommerceData $commerceData)
    {
        $commerceData->delete();
        return response()->json(['message' => 'Commerce data deleted']);
    }
}
