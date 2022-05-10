<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raffle;
use App\Models\Entry;

class RaffleController extends Controller
{
    public function list()
    {
        $raffles = Raffle::get();
        return view('raffles.list',
            ['raffles' => $raffles]);
    }

    public function new()
    {

        return view('raffles.new');
    }


    public function viewEntries(Request $request)
    {
        $raffle_id = $request->raffle_id;
       // dd($raffle_id);

        $raffle = Raffle::where('id',$raffle_id)->first();
        $entries = Entry::where('raffle_id', $raffle_id)->get();


        return view('raffles.entries',
        [
            'raffle' => $raffle,
            'entries' => $entries
        ]
        );
    }


    /**
     * Basically find all the tickets for the raffle id, and select one at random,
     * once we select the ticket, we mark that ticket id as the winner of the raffle.
     *
     * For the purpose of this excercise we're not checking if a winner already exists,
     * we're just setting a new one... irl someone would be very angry with us if it happened.
     *
     * @param Request $request
     * @return void
     */
    public function winner(Request $request)
    {
        $raffle_id = $request->raffle_id;

        $raffle = Raffle::where('id',$raffle_id)->first();
        $tickets = Ticket::where('raffle_id', $raffle_id)->get()->toArray();
        shuffle($tickets); // shuffle for fun..
        $winner = array_rand($tickets,1);


        $raffle->winner = $tickets[$winner]['id'];
        $raffle->save();
        dd($raffle);
       // redirect('/raffles');
    }
}
