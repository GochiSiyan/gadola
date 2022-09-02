<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommerceMetaRequest;
use App\Http\Requests\UpdateCommerceMetaRequest;
use App\Models\CommerceMeta;

class CommerceMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CommerceMeta::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommerceMetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommerceMetaRequest $request)
    {
        $commerceMeta = CommerceMeta::create($request->all());

        return response()->json($commerceMeta, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommerceMeta  $commerceMeta
     * @return \Illuminate\Http\Response
     */
    public function show(CommerceMeta $commerceMeta)
    {
        return response()->json($commerceMeta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommerceMetaRequest  $request
     * @param  \App\Models\CommerceMeta  $commerceMeta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommerceMetaRequest $request, CommerceMeta $commerceMeta)
    {
        $commerceMeta->update($request->all());

        return response()->json($commerceMeta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommerceMeta  $commerceMeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommerceMeta $commerceMeta)
    {
        $commerceMeta->delete();

        return response()->json(['message' => 'Commerce meta deleted']);
    }
}
