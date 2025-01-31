<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use App\Http\Requests\RepositoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RepositoryController extends Controller
{
    use AuthorizesRequests;

    public function index(){
        $repositories = Auth::user()->repositories;
        return view('repositories.index', ['repositories' => $repositories]);
    }

    public function show( Repository $repository ){
        $this->authorize('pass', $repository);

        return view('repositories.show', ['repository' => $repository]);
    }

    public function create(){
        return view('repositories.create');
    }

    public function store( RepositoryRequest $request ){
        $request->user()->repositories()->create($request->all());
        return redirect()->route('repositories.index');
    }

    public function edit(){
        $repository = Repository::find(request()->repository);

        $this->authorize('pass', $repository);

        return view('repositories.edit', ['repository' => $repository]);
    }

    public function update( RepositoryRequest $request, Repository $repository ){
        $this->authorize('pass', $repository);

        $repository->update($request->all());
        return redirect()->route('repositories.edit', $repository);
    }

    public function destroy( Repository $repository ){

        $this->authorize('pass', $repository);

        $repository->delete();
        return redirect()->route('repositories.index');
    }
}
