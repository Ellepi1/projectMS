<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Person;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index() {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
        ]);

        Event::create($request->all());
        return redirect()->route('home');
    }

    public function show(Event $event) {
        $people = Person::where('event_id', $event->id)->get();
        return view('events.show', compact('event', 'people'));
    }

    public function edit(Event $event) {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event) {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
        ]);

        $event->update($request->all());
        return redirect()->route('events.show', $event);
    }

    public function destroy(Event $event) {
        $event->delete();
        return redirect()->route('home');
    }
}
