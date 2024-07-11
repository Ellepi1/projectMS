<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Event;
use Illuminate\Http\Request;

class PersonController extends Controller {
    public function create(Request $request) {
        $event = null;
        if ($request->has('event_id')) {
            $event = Event::find($request->input('event_id'));
        }
        return view('people.create', compact('event'));
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'event_id' => 'required|exists:events,id',
        ]);

        Person::create($request->all());
        $event_id = $request->event_id;
        return redirect()->route('events.show', $event_id);
    }

    public function destroy(Person $person) {
        $event_id = $person->event_id; 
        $person->delete();
        return redirect()->route('events.show', $event_id);
    }
    
}
