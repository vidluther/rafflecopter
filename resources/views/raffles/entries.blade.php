<x-app>
    <x-slot name="headline">

        {{ $raffle->name }} entries

    </x-slot>
    <main>
        <h3> Winning prize is {{ $raffle->prize }}</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Entry Name</th>
                <th scope="col">Phone </th>
                <th scope="col">Date Entered</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($entries AS $entry)

                <tr>
                    <th scope="row">{{ $entry->id }}</th>
                    <td>{{ $entry->name }}</td>
                    <td> {{ $entry->phone }}</td>
                    <td> {{ $entry->created_at }}</td>
                </tr>
            @empty
                <tr> <td> No one has bought a ticket for this raffle yet :( </td></tr>
            @endforelse
            </tbody>
        </table>


    </main>

</x-app>
