<x-body>
    <main class="mt-6">
            <h1>{{ $person->first_name }} {{ $person->last_name }}</h1>
            <h2>Eventi</h2>
            <ul>
                @foreach ($person->events as $event)
                    <li>{{ $event->name }} - data {{ $event->date }}</li>
                @endforeach
            </ul>    
    </main>
</x-body>
