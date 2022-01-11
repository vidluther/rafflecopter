<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
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

Route::get('/', [Dashboard::class,'show'])->name('home');
Route::get('/raffles', [\App\Http\Controllers\Raffle::class, 'show'])->name('raffles');
Route::get('/tickets', [\App\Http\Controllers\Ticket::class, 'show'])->name('tickets');

//Route::get('/', function () {
//    return view('welcome');
//});
