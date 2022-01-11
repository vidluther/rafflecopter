<x-app>
    <x-slot name="headline">

        {{ __('List of Raffle Entries') }}

    </x-slot>
<main>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Raffle Name</th>
            <th scope="col">Ticker Holder Name</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($tickets AS $ticket)
        <tr>
            <th scope="row">{{ $ticket->id }}</th>
            <td>{{ $ticket->raffle->name }}</td>
            <td> {{ $ticket->name }}</td>
            <td> {{ $ticket->phone }}</td>
        </tr>
        @empty
        @endforelse
        </tbody>
    </table>


</main>
</x-app>
