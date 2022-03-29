<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = Availability::all();
        return view('availabilities.index', ['availabilities' => $availabilities]);
    }
    public function create()
    {
        return view('availabilities.create');
    }
    public function store(Request $request)
    {
        Availability::addNew($request->validated());
        return redirect(route('availabilities.index'));
    }
    public function show(Availability $availability)
    {
        return view('availabilities.show', ['availability' => $availability]);
    }
    public function edit(Availability $availability)
    {
        return view('availabilities.edit', ['availability' => $availability]);
    }
    public function update(Request $request, Availability $availability)
    {
        $availability->update($request->validated());
        return redirect(route('availabilities.show', ['availability' => $availability]));
    }
    public function destroy(Availability $availability)
    {
        $availability->delete();
        return redirect(route('availabilities.index'));
    }
}
