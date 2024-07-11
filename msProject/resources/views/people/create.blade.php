
<x-body>
    <main class="mt-6">
    <h1>Aggiungi Partecipante @if($event) a {{ $event->name }} @endif</h1>
    <form action="{{ route('people.store') }}" method="POST">
        @csrf
        <label for="first_name">Nome:</label>
        <input type="text" name="first_name" id="first_name" required>
        <label for="last_name">Cognome:</label>
        <input type="text" name="last_name" id="last_name" required>
        @if ($event)
            <input type="hidden" name="event_id" value="{{ $event->id }}">
        @else
            <label for="event_id">Evento:</label>
            <select name="event_id" id="event_id" required>
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
        @endif
        <button type="submit">Aggiungi</button>
    </form>
    </main>
</x-body>



