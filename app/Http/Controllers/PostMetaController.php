<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostMetaRequest;
use App\Http\Requests\UpdatePostMetaRequest;
use App\Models\Post;
use App\Models\PostMeta;

class PostMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return response()->json($post->metas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostMetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostMetaRequest $request, Post $post)
    {
        $post->metas()->create($request->validated());
        return response()->json(['message' => 'Post meta created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, PostMeta $postMeta)
    {
        return response()->json($postMeta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostMetaRequest  $request
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostMetaRequest $request, Post $post, PostMeta $postMeta)
    {
        $postMeta->update($request->validated());
        return response()->json(['message' => 'Post meta updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, PostMeta $postMeta)
    {
        $postMeta->delete();
        return response()->json(['message' => 'Post meta deleted']);
    }
}
