<x-body>


                    <main class="mt-6">
                    <h1>Crea Nuovo Evento</h1>
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" required>
                        <label for="date">Data:</label>
                        <input type="date" name="date" id="date" required>
                        <button type="submit">Crea</button>
                    </form>
                        
                    </main>
</x-body>

    
