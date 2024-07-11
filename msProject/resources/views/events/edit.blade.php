<x-body>


                    <h1>Modifica Evento</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST" class= "ml-2">
        @csrf
        @method('PUT')
        <div class="space-y-12">
            
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome Evento</label>
          <div class="mt-2">
              <div class="flex rounded-md shadow-sm border-2 ring-12 ring-inset ring-black-300 focus-within:ring-22 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $event->name }}" required>
                </div>
            </div>
            <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Data:</label>
            <div class="mt-2">
                <div class="flex rounded-md shadow-sm border-2 ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="date" name="date" id="date" value="{{ $event->date }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-5 sm:text-sm sm:leading-6"  required>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="ml-2 mt-6 flex items-center justify-start gap-x-6">
        <button type="button" ><a href="{{ url()->previous() }}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Annulla</a></button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifica</button>
    </div>
    </form>
    <div class="border-b border-black-900/10 pb-12">
    </div>

</x-body>

    




