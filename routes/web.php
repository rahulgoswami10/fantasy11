<?php

use App\Http\Controllers\FootballController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [SportController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('football.index');
});

Route::get('/sports/{sport?}', [SportController::class, 'index']);


// Route::get('/football', fn() => view('football.index'));
Route::get('/football', [FootballController::class, 'index']);
// Route::get('/football/league', [FootballController::class, 'league']);
Route::get('football/league/{slug}', [FootballController::class, 'league'])->name('football.league');
Route::get('/cricket', fn() => view('cricket.index'));
Route::get('/basketball', fn() => view('basketball.index'));
Route::get('/rugby', fn() => view('rugby.index'));
