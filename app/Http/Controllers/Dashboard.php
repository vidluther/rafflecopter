<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class Dashboard extends Controller
{
    public function show()
    {
        $tickets = Ticket::paginate(20);
        return view('raffles.dashboard',
            ['tickets' => $tickets]
        );
    }
}
