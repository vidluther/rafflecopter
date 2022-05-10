<x-app>
    <x-slot name="headline">

        {{ __('List of Raffeeles') }}

    </x-slot>
    <main>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Raffle Name</th>
                <th scope="col">Prize </th>
                <th scope="col">Date Created</th>
                <th scope="col"> Actions </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($raffles AS $raffle)
                <tr>
                    <th scope="row">{{ $raffle->id }}</th>
                    <td>{{ $raffle->name }}</td>
                    <td> {{ $raffle->prize }}</td>
                    <td> {{ $raffle->created_at }}</td>
                    <td> <a href="{{ route("buy-raffle-ticket", $raffle->id) }}"> Enter Raffle</a> &middot;
                        <a href="{{ route("view-raffle-entries", $raffle->id) }}"> View Entries </a>
                    </td>
                </tr>
            @empty
                <tr> <td> :( No Raffles yet.. you should probably create a raffle first </td></tr>
            @endforelse
            </tbody>
        </table>


    </main>

</x-app>
