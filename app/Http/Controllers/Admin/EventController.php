<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventFormRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.events.index', [
            'events' => Event::recent()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = new Event();
        return view('admin.events.form', [
            'event' => $event
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventFormRequest $request)
    {
        $event = Event::create($request->validated());
        return to_route('adminevent.index')->with('success', 'L\'enregistrement a bien été crée');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.events.form', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Event $event, EventFormRequest $request)
    {
        $event->update($request->validated());
        return to_route('adminevent.index')->with('success', 'L\'enregistrement a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return to_route('adminevent.index')->with('success', 'L\'enregistrement a bien été supprimé');
    }
}
