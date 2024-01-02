<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('images', [
            'images' => Photo::orderBy('created_at', 'desc')
        ]);
    }
}
