<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Raffle;

class NewRaffle extends Component
{
    public String $name = '';
    public String $prize = '';

    public function create()
    {

        $data = $this->validate(
            [
                'name' => 'required|unique:raffles',
                'prize' => 'required'
            ]
        );
        Raffle::create([
            'name' => $data['name'],
            'prize' => $data['prize']
        ]);
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.new-raffle');
    }
}
