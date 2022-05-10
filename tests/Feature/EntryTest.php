<?php

namespace Tests\Feature;

use App\Models\Raffle;
use App\Models\Entry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EntryTest extends TestCase
{
    use RefreshDatabase;
    function test_invalid_phone_fails()
    {
       $raffle = Raffle::create([
            'name' => 'Raffle 1',
            'prize' => 'Some Different Prize'
        ]);
        Livewire::test('new-entry')
            ->set('raffle_id', $raffle->id)
            ->set('name', 'Joe Example')
            ->set('phone', '111-229-2541')
            ->call('create')
            ->assertHasErrors(['phone']);
    }

    function test_valid_phone_passes()
    {
        $raffle = Raffle::create([
            'name' => 'Raffle 1',
            'prize' => 'Some Different Prize'
        ]);
        //dd($raffle->id);
        Livewire::test('new-entry')
            ->set('raffle_id', $raffle->id)
            ->set('name', 'Joe Example')
            ->set('phone', '361-229-2541')
            ->call('create')
            ->assertHasNoErrors();
    }
}
