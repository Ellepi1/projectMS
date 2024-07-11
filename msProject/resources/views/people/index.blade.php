<x-body>
    <h1 class="text-2xl font-bold mb-4">Persone</h1>
    <a href="{{ route('people.create') }}" class="text-blue-500">Crea Nuova Persona</a>
    @foreach ($events as $event)
        <div>
            <h2>{{ $event->name }}</h2>
            <p>Date: {{ $event->date }}</p>
            <a href="{{ route('events.show', $event->id) }}">View Details</a>
        </div>
    @endforeach
</x-body>