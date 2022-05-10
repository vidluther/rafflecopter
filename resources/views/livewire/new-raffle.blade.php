
<div>

    <form wire:submit.prevent="create">
    <div>
        <label for="name"> Name of Raffle</label>
        <input wire:model="name" type="text" id="name" name="name" size="25" />
        @error('name') <strong> {{ $message }}</strong> @enderror

    <div>
        <label for="prize"> Raffle Prize </label>
        <input wire:model="prize" type="text" id="prize" name="prize" size="25" />
        @error('prize') <strong> {{ $message }} </strong> @enderror
    </div>

    <div>
        <input type="submit" value="create raffle"/>
    </div>
    </form>
</div>
