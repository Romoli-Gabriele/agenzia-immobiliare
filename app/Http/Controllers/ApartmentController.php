<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartments.index', ['apartments' => $apartments]);
    }
    public function create()
    {
        return view('apartments.create');
    }
    public function store(Request $request)
    {
        Apartment::addNew([$request->validated()]);
        return redirect('apartments.index');
    }
    public function show(Apartment $apartment)
    {
        return view('apartments.show', ['apartment' => $apartment]);
    }
    public function edit(Apartment $apartment)
    {
        return view('apartments.edit', ['apartment' => $apartment]);
    }
    public function update(Request $request, Apartment $apartment)
    {
        $apartment->update($request->validated());
        return redirect(route('apartments.show', ['apartment' => $apartment]));
    }
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect(route('apartments.index'));
    }
}
