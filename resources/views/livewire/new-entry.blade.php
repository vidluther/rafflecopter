<div>
    {{-- The whole world belongs to you. --}}
    <h3> Here you can enter a raffle. </h3>


    <div>
        <form wire:submit.prevent="create">
    <label for="raffle_id"> Pick The Raffle </label>
        <select wire:model="raffle_id" name="raffle_id">
                <option value=""> Please Select The Raffle You Want To Enter</option>
            @forelse($raffles AS $raffle)
                <option value="{{$raffle->id}}"> {{ $raffle->name }}</option>
            @empty
                <option value="XX"> Please Create a Raffle First</option>
            @endforelse
        </select>
            @error('raffle_id') <strong> {{ $message }} </strong> @enderror
    </div>

    <div>
        <label for="name"> Your Name </label>
        <input wire:model="name" name="name">
        @error('name') <strong> {{ $message }} </strong> @enderror
    </div>

    <div>
        <label for="phone"> Your Phone </label>
        <input wire:model="phone" name="phone">
        @error('phone') <strong> {{ $message }} </strong> @enderror
    </div>

    <div>  <input type="submit" value="enter raffle"/></div>


</div>
