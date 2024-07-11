
<x-body>

                    
                    <main class="mt-6">
                    <h1>I tuoi eventi</h1>
            <ul>
        @foreach ($events as $event)
            <li><a href="{{ route('events.show', $event) }}">{{ $event->name }} - {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</a></li>
        @endforeach
    </ul>
                    <a href="{{ route('events.create') }}">Crea Nuovo Evento</a>
                        
                    </main>

</x-body>
                 
    



