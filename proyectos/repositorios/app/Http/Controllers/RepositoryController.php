<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepositoryController extends Controller
{
    public function index(Request $request)
    {
        $repositories = $request->user()->repositories;
        return view('repositories.index', ['repositories' => $repositories]);
    }

    public function create()
    {
        return view('repositories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required'
        ]);
        $request->user()->repositories()->create($request->all());
        return redirect()->route('repositories.index');
    }

    public function show(Repository $repository)
    {
        if (Auth::user()->id != $repository->user_id) {
            abort(403);
        }
        return view('repositories.show', compact('repository'));
    }

    public function edit(Repository $repository)
    {
        if (Auth::user()->id != $repository->user_id) {
            abort(403);
        }
        return view('repositories.edit', compact('repository'));
    }

    public function update(Request $request, Repository $repository)
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required'
        ]);
        if (Auth::user()->id != $repository->user_id) {
            abort(403);
        }
        $repository->update($request->all());
        return redirect()->route('repositories.edit', $repository);
    }

    public function destroy(Repository $repository)
    {
        if (Auth::user()->id != $repository->user_id) {
            abort(403);
        }
        $repository->delete();
        return redirect()->route('repositories.index');
    }
}
