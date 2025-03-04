<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrdController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('prd', PrdController::class);
        // Route::get('/dashboard/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        // middleware untuk role admin
        // Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('prds.edit');
        // Route::middleware(['admin'])->group(function () {
        //     Route::resource('prd', PrdController::class);
        // });

    });
});

require __DIR__ . '/auth.php';
