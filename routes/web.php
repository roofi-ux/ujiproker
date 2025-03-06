<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

    // Route dashboard default (jika user tidak punya divisi, atau sebagai fallback)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route dashboard untuk setiap divisi (dinamis)
    Route::get('/dashboard/divisions/{division_slug}', [DashboardController::class, 'divisionDashboard'])->name('dashboard.divisions.division_slug'); // Gunakan parameter {division_slug}

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
