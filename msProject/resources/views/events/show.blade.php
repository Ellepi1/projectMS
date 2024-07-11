<x-body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>{{ $event->name }}</h1>
    <div class="ml-2">

        <p class="ml-2">Data: {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</p>
        <table class="ml-2 ">
            <thead>
                <tr>
                    <th class="pl-4 "scope="col">Partecipanti</th>
                    <th class="pl-4 " scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr>
                        <td class="pl-4 ">{{ $person->first_name }} {{ $person->last_name }}</td>
                        <td class="pl-2  "><form action="{{ route('people.destroy', $person) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-md bg-red-600 px-3 py-1 text-sm font-semibold text-white shadow-sm hover:bg-red-500">X </button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if ($people->isEmpty())
        <p>nessun partecipante</p>
        @endif
        <button type="submit" class="mt-1 rounded-md bg-green-600 px-3 py-1 text-sm font-semibold text-white shadow-sm hover:bg-green-500"><a href="{{ route('people.create', ['event_id' => $event->id]) }}">Aggiungi partecipante</a>
    </button>
    <div class="mt-2">
        
        <a class="rounded-md bg-indigo-600 px-2 py-1 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500" href="{{ route('events.edit', $event) }}">Modifica evento</a>
        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button  class="rounded-md bg-red-600 px-2 py-1 text-sm font-semibold text-white shadow-sm hover:bg-red-500" type="submit">Cancella</button>
        </form>
    </div>
</div>
</x-body>







