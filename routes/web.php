<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\RaffleController;
use App\Http\Controllers\EntryController;

use App\Http\Livewire\NewEntry;
use App\Http\Livewire\NewRaffle;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/raffle/view/{raffle_id}', [RaffleController::class,'viewentries'] )
    ->name('view-raffle-entries');

Route::get('/raffle/new/', [RaffleController::class,'new'])
    ->name('new-raffle');

Route::get('/raffle/buy', [EntryController::class,'new'])
    ->name('buy-raffle-ticket');


Route::get('/', [RaffleController::class,'list'])
    ->name('home');



Route::get('/pick-a-winner/{raffle_id}', [RaffleController::class, 'winner'])
    ->name('chicken-dinner');



