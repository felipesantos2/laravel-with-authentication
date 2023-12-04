<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Anime\AnimeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::loginUsingId(1);

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::controller(AnimeController::class)->prefix('/animes')->group( function() {
    Route::get('/', 'index')->name('animes.index');
    Route::get('/{anime}/edit', 'edit')->name('animes.edit');
    Route::put('/{anime}', 'edit')->name('animes.update');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
