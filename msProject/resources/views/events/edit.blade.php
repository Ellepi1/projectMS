<x-body>


                    <main class="mt-6">
                        <h1>Modifica Evento</h1>
                        <form action="{{ route('events.update', $event->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="name">Nome:</label>
                            <input type="text" name="name" id="name" value="{{ $event->name }}" required>
                            <label for="date">Data:</label>
                            <input type="date" name="date" id="date" value="{{ $event->date }}" required>
                            <button type="submit">Aggiorna</button>
                        </form>
                        
                    </main>

</x-body>


