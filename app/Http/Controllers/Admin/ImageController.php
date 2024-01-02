<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormPhotoRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.images.index', [
            'images' => Photo::orderBy('created_at', 'desc')->get()
        ]);
    }

    // public function index()
    // {
    //     $images = Photo::orderBy('created_at', 'desc')->get();
    //     return view('admin.images.index', compact('images'));
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $image = new Photo();
        
        return view('admin.images.form', [
            'image' => $image
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormPhotoRequest $request)
{
    $request->validate([
        'image' => 'required|image|max:5000',
    ]);

    $imagePath = $request->file('image')->store('images', 'public');
    dd($imagePath);

    $image = Photo::create([
        'image' => 'Photo',
        'image_path' => $imagePath,
    ]);

    return redirect()->route('adminimage.index')->with('success', 'L\'image a bien été sauvegardée');
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $image)
    {
        return view('admin.images.form', [
            'image' => $image
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormImageRequest $request, Photo $image)
{
    $request->validate([
        'image' => 'sometimes|image|max:5000',
    ]);

    if ($request->hasFile('image')) {
        // Supprimez l'ancienne image si elle existe
        // Storage::delete($image->image_path);

        // Mettez à jour avec la nouvelle image
        $imagePath = $request->file('image')->store('images', 'public');
        $image->update(['image_path' => $imagePath]);
    }

    return redirect()->route('adminimage.index')->with('success', 'Image mise à jour avec succès!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
