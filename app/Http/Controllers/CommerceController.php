<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommerceRequest;
use App\Http\Requests\UpdateCommerceRequest;
use App\Models\Commerce;

class CommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commerces = Commerce::all();
        return response()->json($commerces);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommerceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommerceRequest $request)
    {
        $commerce = Commerce::create($request->validated());
        return response()->json(['message' => 'Commerce created', 'commerce' => $commerce]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commerce  $commerce
     * @return \Illuminate\Http\Response
     */
    public function show(Commerce $commerce)
    {
        return response()->json($commerce);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommerceRequest  $request
     * @param  \App\Models\Commerce  $commerce
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommerceRequest $request, Commerce $commerce)
    {
        $commerce->update($request->validated());
        return response()->json(['message' => 'Commerce updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commerce  $commerce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commerce $commerce)
    {
        $commerce->delete();
        return response()->json(['message' => 'Commerce deleted']);
    }
}
