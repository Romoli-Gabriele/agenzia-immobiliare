<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    public function index()
    {
        $neighborhoods = Neighborhood::all();
        return view('neighborhoods.index', ['neighborhoods' => $neighborhoods]);
    }
    public function create()
    {
        return view('neighborhoods.create');
    }
    public function store(Request $request)
    {
        Neighborhood::addNew($request->validated());
        return redirect(route('neighborhoods.index'));
    }
    public function show(Neighborhood $neighborhood)
    {
        return view('neighborhoods.show', ['neighborhood' => $neighborhood]);
    }
    public function edit(Neighborhood $neighborhood)
    {
        return view('neighborhoods.edit', ['neighborhood' => $neighborhood]);
    }
    public function update(Neighborhood $neighborhood, Request $request)
    {
        $neighborhood->update($request->validated());
        return redirect(route('neighborhoods.show', ['neighborhood' => $neighborhood]));
    }
    public function destroy(Neighborhood $neighborhood)
    {
        $neighborhood->delete();
        return redirect(route('neighborhoods.index'));
    }
}
