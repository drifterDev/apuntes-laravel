<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::with('recipes.user', 'recipes.tags', 'recipes.category')->get();
        return TagResource::collection($tags);
    }

    public function store(Request $request)
    {
    }

    public function show(Tag $tag)
    {
        $tag = $tag->load('recipes.tags', 'recipes.category', 'recipes.user');
        return new TagResource($tag);
    }

    public function update(Request $request, Tag $tag)
    {
    }

    public function destroy(Tag $tag)
    {
    }
}
