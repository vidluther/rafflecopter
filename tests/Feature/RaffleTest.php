<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Raffle;

class RaffleTest extends TestCase
{
    use RefreshDatabase;

    function test_can_create_a_raffle()
    {
        Livewire::test('new-raffle')
            ->set('name', 'Raffle 1')
            ->set('prize', 'PS 10')
            ->call('create')
            ->assertRedirect('/');
    }

    function test_raffle_name_is_unique()
    {
        Raffle::create([
            'name' => 'Raffle 1',
            'prize' => 'Some Different Prize'
            ]);
        Livewire::test('new-raffle')
            ->set('name', 'Raffle 1')
            ->set('prize', 'PS 10')
            ->call('create')
            ->assertHasErrors(['name' => 'unique']);
    }

}
