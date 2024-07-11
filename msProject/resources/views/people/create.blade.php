
<x-body>
    <h1>Aggiungi Partecipante @if($event) a {{ $event->name }} @endif</h1>
    <form action="{{ route('people.store') }}" method="POST" class= "ml-2">
        @csrf
        <div class="space-y-12">
            
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
          <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
          <div class="mt-2">
              <div class="flex rounded-md shadow-sm border-2 ring-12 ring-inset ring-black-300 focus-within:ring-22 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  <input type="text" name="first_name" id="first_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="nome" required>
                </div>
            </div>
            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Cognome</label>
          <div class="mt-2">
              <div class="flex rounded-md shadow-sm border-2 ring-12 ring-inset ring-black-300 focus-within:ring-22 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  <input type="text" name="last_name" id="last_name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="nome" required>
                </div>
            </div>
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            </div>
        </div>
    </div>
    <div class="border-b border-black-900/10 pb-12">
        </div>
        
        <div class="ml-2 mt-6 flex items-center justify-start gap-x-6">
            <button type="button" ><a href="{{ url()->previous() }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white hover:bg-gray-500" aria-current="page">Annulla</a></button>
            <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500">Aggiungi</button>
        </div>
    </form>
    
</x-body>



