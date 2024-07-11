<x-body>
    <main class="mt-6">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>{{ $event->name }}</h1>
    <p>Data: {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</p>
    <h2>Partecipanti</h2>
    <ul>
        @if ($people->isEmpty())
            <li>Nessun partecipante</li>
        @else
            @foreach ($people as $person)
                <li>
                    {{ $person->first_name }} {{ $person->last_name }}
                    <form action="{{ route('people.destroy', $person) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Rimuovi</button>
                    </form>
                </li>
            @endforeach
        @endif
    </ul>
    <a href="{{ route('events.edit', $event) }}">Modifica evento</a>
    <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Elimina</button>
    </form>
    <a href="{{ route('people.create', ['event_id' => $event->id]) }}">Aggiungi partecipante</a>
    </main>
</x-body>

    





