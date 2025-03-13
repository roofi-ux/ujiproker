<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\PrdDashboardController; // Tambahkan use statement untuk PrdDashboardController

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route dashboard default (opsional)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route dashboard untuk divisi PRD - UBAH ROUTE
    Route::resource('prd', PrdController::class);
    Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
    Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
    Route::get('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    
    Route::resource('hr', HrController::class);
    Route::get('/dashboard/hr', [HrController::class, 'index'])->name('dashboard.hr.index'); // Ubah route untuk PRD
    Route::get('/hr/{id}/edit', [HrController::class, 'edit'])->name('dashboard.hr.edit');
    Route::get('/dashboard/hr/{id}', [HrController::class, 'update'])->name('dashboard.hr.update');

    Route::resource('ga', PrdController::class);
    

    // Route dashboard untuk divisi lain (jika ada, contoh keuangan)
    // Route::get('/dashboard/keuangan', [KeuanganDashboardController::class, 'index'])->name('dashboard.keuangan'); // Contoh untuk divisi keuangan

    // Route dashboard untuk setiap divisi (Dihapus karena sudah dipindah ke controller spesifik)
    // Route::get('/dashboard/divisions/{division_slug}', [DashboardController::class, 'divisionDashboard'])->name('dashboard.divisions.division_slug'); // Route dinamis DIHAPUS
});

require __DIR__ . '/auth.php';