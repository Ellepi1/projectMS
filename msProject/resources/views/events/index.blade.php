
<x-body>

<h1 class="ml-4">I tuoi eventi</h1>
<table class="ml-2 ">
    <thead>
        <tr>
            <th class="pl-4 border border-slate-300"scope="col">nome <button type="button" class=" px-2 py-1 ml-3 btn btn-dark" onclick="window.location='{{ route('events.index', ['sort' => 'name']) }}'">↕</button></th>
            <th class="pl-4 border border-slate-300" scope="col">data<button type="button" class="px-2 py-1 ml-2 btn btn-dark" onclick="window.location='{{ route('events.index', ['sort' => 'date']) }}'">↕</button></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td class="pl-2  "><button type="button" class="mt-2 ml-2 btn btn-dark"><a href="{{ route('events.show', $event) }}" class="text-sm font-medium text-white">{{ $event->name }} </a></button></td>
                <td class="pl-4 "><a href="{{ route('events.show', $event) }}">{{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <button type="button" class="mt-2 ml-2 btn btn-dark"><a href="{{ route('events.create') }}">Crea Nuovo Evento</a></button>

</x-body>