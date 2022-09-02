<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserMetaRequest;
use App\Http\Requests\UpdateUserMetaRequest;
use App\Models\UserMeta;

class UserMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UserMeta::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserMetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserMetaRequest $request)
    {
        $userMeta = UserMeta::create($request->all());

        return response()->json($userMeta, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMeta  $userMeta
     * @return \Illuminate\Http\Response
     */
    public function show(UserMeta $userMeta)
    {
        return response()->json($userMeta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserMetaRequest  $request
     * @param  \App\Models\UserMeta  $userMeta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserMetaRequest $request, UserMeta $userMeta)
    {
        $userMeta->update($request->all());

        return response()->json($userMeta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMeta  $userMeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMeta $userMeta)
    {
        $userMeta->delete();

        return response()->json(['message' => 'UserMeta deleted']);
    }
}
