<x-body>
 <h1>Modifica Persona</h1>
 <form action="{{ route('people.update', $person) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">Nome:</label>
        <input type="text" name="first_name" id="first_name" value="{{ $person->first_name }}" required>
        <label for="last_name">Cognome:</label>
        <input type="text" name="last_name" id="last_name" value="{{ $person->last_name }}" required>
        <label for="event_id">Evento:</label>
        <select name="event_id" id="event_id">
            <option value="">Nessuno</option>
            @foreach ($events as $event)
                <option value="{{ $event->id }}" @if($event->id == $person->event_id) selected @endif>{{ $event->name }}</option>
            @endforeach
        </select>
        <button type="submit">Salva</button>
    </form>
</x-body>
