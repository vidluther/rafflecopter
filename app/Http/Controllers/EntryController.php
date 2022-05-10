<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function new()
    {
        // this is just calling the livewire component new-entry.
        return view('new-entry');
    }
}
