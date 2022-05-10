<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Raffle;
use App\Models\Entry;


class NewEntry extends Component
{
    public $raffle_id = '';
    public $raffles;
    public String $name = '';
    public String $phone = '';

    public function create()
    {
      //  dd($this->raffle_id);
        $data = $this->validate(
            [
                'raffle_id' => 'required|numeric',
                'name' => 'required',
                'phone' => 'required|phone:US'
            ]
        );
        Entry::create([
            'raffle_id' => $this->raffle_id,
            'name' => $data['name'],
            'phone' => $data['phone']
        ]);
       // return $this->redirect('/');
    }

    public function render()
    {
        $this->raffles = Raffle::get();

        return view('livewire.new-entry');
    }
}
