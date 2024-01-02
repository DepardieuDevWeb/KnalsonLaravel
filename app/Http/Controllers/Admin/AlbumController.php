<?php

namespace App\Http\Controllers\Admin;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AlbumFormRequest;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.albums.index', [
            'albums' => Album::recent()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $album = new Album();
        return view('admin.albums.form', [
            'album' => $album
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumFormRequest $request)
    {
        $album = Album::create($request->validated());
        return to_route('adminalbum.index')->with('success', 'L\'enregistrement a bien été crée');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('admin.albums.form', [
            'album' => $album
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Album $album, AlbumFormRequest $request)
    {
        $album->update($request->validated());
        return to_route('adminalbum.index')->with('success', 'L\'enregistrement a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return to_route('adminalbum.index')->with('success', 'L\'enregistrement a bien été supprimé');
    }
}
