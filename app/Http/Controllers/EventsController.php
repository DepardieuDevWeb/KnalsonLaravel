<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        // dd(Event::all());
        return view('events', [
            'events' => Event::recent()->get(),
            'albums' => Album::recent()->get()
        ]);
    }
}
