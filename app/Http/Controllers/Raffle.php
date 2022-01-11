<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Raffle extends Controller
{
    public function show()
    {
        return view('show.raffles')
    }
}
