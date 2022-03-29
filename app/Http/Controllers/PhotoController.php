<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', ['photos' => $photos]);
    }
    public function create()
    {
        return view('photos.create');
    }
    public function store(Request $request)
    {
        Photo::addNew($request->validated());
        return redirect(route('photos.index'));
    }
    public function show(Photo $photo)
    {
        return view('photos.show', ['photo' => $photo]);
    }
    public function edit(Photo $photo)
    {
        return view('photos.edit', ['photo' => $photo]);
    }
    public function update(Photo $photo, Request $request)
    {
        $photo->update($request->validated());
        return redirect(route('photos.show', ['photo' => $photo]));
    }
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect(route('photos.index'));
    }
}
