<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;

class LineController extends Controller
{
    public function index()
    {
        $lines = Line::all();
        return view('lines.index', ['lines' => $lines]);
    }
    public function create()
    {
        return view('lines.create');
    }
    public function store(Request $request)
    {
        Line::addNew($request->validated());
        return redirect(route('lines.index'));
    }
    public function show(Line $line)
    {
        return view('lines.show', ['line' => $line]);
    }
    public function edit(Line $line)
    {
        return view('lines.edit', ['line' => $line]);
    }
    public function update(Request $request, Line $line)
    {
        $line->update($request->validated());
        return redirect(route('lines.show', ['line' => $line]));
    }
    public function destroy(Line $line)
    {
        $line->delete();
        return redirect(route('lines.index'));
    }
}
