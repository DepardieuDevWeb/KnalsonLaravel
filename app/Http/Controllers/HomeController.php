<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        // User::create([
        //     'name' => 'Pascal',
        //     'email' => 'depardieu@gmail.com',
        //     'password' => Hash::make('12345678')

        // ]);
        return view('home');
    }

    public function indexAdmin()
    {
        return view('admin.index');
    }

    public function adminAuRevoir()
    {
        return view('admin.index_aurevoir');  
    }
}
