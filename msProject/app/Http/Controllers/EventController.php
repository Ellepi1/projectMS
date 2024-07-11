<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Person;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index(Request $request) {
        $sort = $request->get('sort', 'date'); // Default sort by name
    $events = Event::orderBy($sort)->get();

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
        $people = Person::where('event_id', $event->id)
                    ->orderBy('last_name')
                    ->orderBy('first_name')
                    ->get();
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
