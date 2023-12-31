<?php

use App\Http\Controllers\PlayersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group( function () {
    Route::controller(App\Http\Controllers\PlayersController::class)->group(function () {
        Route::get('players', 'index'); //mainview of the page
        Route::get('players/create', 'create');//gin kuha la an mga compact han tables
        Route::post('players', 'store'); 
        Route::get('players/{player}/edit', 'edit');
        Route::put('players/{player}', 'update');
        Route::get('players/{player_id}/delete', 'destroy');
        // Route::get('players', 'search');
    });
});

Route::get('/admin/players/search', [PlayersController::class, 'search'])->name('search.players');
