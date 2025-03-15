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

    Route::middleware(['role:prd|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:hr|admin'])->group(function () {
        Route::resource('hr', HrController::class);
        Route::get('/dashboard/hr', [HrController::class, 'index'])->name('dashboard.hr.index'); // Ubah route untuk PRD
        Route::get('/hr/{id}/edit', [HrController::class, 'edit'])->name('dashboard.hr.edit');
        Route::PUT('/dashboard/hr/{id}', [HrController::class, 'update'])->name('dashboard.hr.update');
    });
    Route::middleware(['role:ga|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:mkt|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:ecm|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:bdrnd|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:cnc|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:wrhs|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:qcs|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:qa|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:mt|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:protech|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:farm|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:export|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:finance|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:purchase|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });
    Route::middleware(['role:prd|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });


    // Route dashboard untuk divisi PRD - UBAH ROUTE


   

    Route::resource('ga', PrdController::class);


    // Route dashboard untuk divisi lain (jika ada, contoh keuangan)
    // Route::get('/dashboard/keuangan', [KeuanganDashboardController::class, 'index'])->name('dashboard.keuangan'); // Contoh untuk divisi keuangan

    // Route dashboard untuk setiap divisi (Dihapus karena sudah dipindah ke controller spesifik)
    // Route::get('/dashboard/divisions/{division_slug}', [DashboardController::class, 'divisionDashboard'])->name('dashboard.divisions.division_slug'); // Route dinamis DIHAPUS
});

require __DIR__ . '/auth.php';