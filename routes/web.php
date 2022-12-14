<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SWAPIController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/actors', [ActorController::class, 'index'])->name('actors.index');

    Route::get('/swapi', [SWAPIController::class, 'index'])->name('swapi.index');
    Route::get('/swapi/{actorId}', [SWAPIController::class, 'movies'])->name('swapi.movies');
});

require __DIR__.'/auth.php';
