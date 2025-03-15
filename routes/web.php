<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\MtController;
use App\Http\Controllers\QaController;
use App\Http\Controllers\CncController;
use App\Http\Controllers\EcmController;
use App\Http\Controllers\MktController;
use App\Http\Controllers\PrdController;
use App\Http\Controllers\QcsController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\WrhsController;
use App\Http\Controllers\BdRndController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProtechController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\DashboardController;
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
        Route::resource('ga', GaController::class);
        Route::get('/dashboard/ga', [GaController::class, 'index'])->name('dashboard.ga.index'); // Ubah route untuk PRD
        Route::get('/ga/{id}/edit', [GaController::class, 'edit'])->name('dashboard.ga.edit');
        Route::PUT('/dashboard/ga/{id}', [GaController::class, 'update'])->name('dashboard.ga.update');
    });
    Route::middleware(['role:mkt|admin'])->group(function () {
        Route::resource('mkt', MktController::class);
        Route::get('/dashboard/mkt', [MktController::class, 'index'])->name('dashboard.mkt.index'); // Ubah route untuk PRD
        Route::get('/mkt/{id}/edit', [MktController::class, 'edit'])->name('dashboard.mkt.edit');
        Route::PUT('/dashboard/mkt/{id}', [MktController::class, 'update'])->name('dashboard.mMktupdate');
    });
    Route::middleware(['role:ecm|admin'])->group(function () {
        Route::resource('ecm', EcmController::class);
        Route::get('/dashboard/ecm', [EcmController::class, 'index'])->name('dashboard.ecm.index'); // Ubah route untuk PRD
        Route::get('/ecm/{id}/edit', [EcmController::class, 'edit'])->name('BdRndhboard.ecm.edit');
        Route::PUT('/dashboard/ecm/{id}', [EcmController::class, 'update'])->name('dashboard.ecm.update');
    });
    Route::middleware(['role:bdrnd|admin'])->group(function () {
        Route::resource('bdrnd', BdRndController::class);
        Route::get('/dashboard/bdrnd', [BdRndController::class, 'index'])->name('dashboard.bdrnd.index'); // Ubah route untuk PRD
        Route::get('/bdrnd/{id}/edit', [BdRndController::class, 'edit'])->name('dashboard.bdrnd.edit');
        Route::PUT('/dashboard/bdrnd/{id}', [BdRndController::class, 'update'])->name('dashboard.bdrnd.update');
    });
    Route::middleware(['role:cnc|admin'])->group(function () {
        Route::resource('cnc', CncController::class);
        Route::get('/dashboard/cnc', [CncController::class, 'index'])->name('dashboard.cnc.index'); // Ubah route untuk PRD
        Route::get('/cnc/{id}/edit', [CncController::class, 'edit'])->name('dashboard.cnc.edit');
        Route::PUT('/dashboard/cnc/{id}', [CncController::class, 'update'])->name('dashboard.cnc.update');
    });
    Route::middleware(['role:wrhs|admin'])->group(function () {
        Route::resource('wrhs', WrhsController::class);
        Route::get('/dashboard/wrhs', [WrhsController::class, 'index'])->name('dashboard.wrhs.index'); // Ubah route untuk PRD
        Route::get('/wrhs/{id}/edit', [WrhsController::class, 'edit'])->name('dashboard.wrhs.edit');
        Route::PUT('/dashboard/wrhs/{id}', [WrhsController::class, 'update'])->name('dashboard.wrhs.update');
    });
    Route::middleware(['role:qcs|admin'])->group(function () {
        Route::resource('qcs', QcsController::class);
        Route::get('/dashboard/qcs', [QcsController::class, 'index'])->name('dashboard.qcs.index'); // Ubah route untuk PRD
        Route::get('/qcs/{id}/edit', [QcsController::class, 'edit'])->name('dashboard.qcs.edit');
        Route::PUT('/dashboard/qcs/{id}', [QcsController::class, 'update'])->name('dashboard.qcs.update');
    });
    Route::middleware(['role:qa|admin'])->group(function () {
        Route::resource('qa', QaController::class);
        Route::get('/dashboard/qa', [QaController::class, 'index'])->name('dashboard.qa.index'); // Ubah route untuk PRD
        Route::get('/qa/{id}/edit', [QaController::class, 'edit'])->name('dashboard.qa.edit');
        Route::PUT('/dashboard/qa/{id}', [QaController::class, 'update'])->name('dashboard.qa.update');
    });
    Route::middleware(['role:mt|admin'])->group(function () {
        Route::resource('mt', MtController::class);
        Route::get('/dashboard/mt', [MtController::class, 'index'])->name('dashboard.mt.index'); // Ubah route untuk PRD
        Route::get('/mt/{id}/edit', [MtController::class, 'edit'])->name('dashboard.mt.edit');
        Route::PUT('/dashboard/mt/{id}', [MtController::class, 'update'])->name('dashboard.mtMtdate');
    });
    Route::middleware(['role:protech|admin'])->group(function () {
        Route::resource('protech', ProtechController::class);
        Route::get('/dashboard/protech', [ProtechController::class, 'index'])->name('dashboard.protech.index'); // Ubah route untuk PRD
        Route::get('/protech/{id}/edit', [ProtechController::class, 'edit'])->name('dashboard.protech.edit');
        Route::PUT('/dashboard/protech/{id}', [ProtechController::class, 'update'])->name('dashboard.protech.update');
    });
    Route::middleware(['role:farm|admin'])->group(function () {
        Route::resource('farm', FarmController::class);
        Route::get('/dashboard/farm', [FarmController::class, 'index'])->name('dashboard.farm.index'); // Ubah route untuk PRD
        Route::get('/farm/{id}/edit', [FarmController::class, 'edit'])->name('dashboard.farm.edit');
        Route::PUT('/dashboard/farm/{id}', [FarmController::class, 'update'])->name('dashboard.farmFarmdate');
    });
    Route::middleware(['role:export|admin'])->group(function () {
        Route::resource('export', ExportController::class);
        Route::get('/dashboard/export', [ExportController::class, 'index'])->name('dashboard.export.index'); // Ubah route untuk PRD
        Route::get('/export/{id}/edit', [ExportController::class, 'edit'])->name('dashboard.export.edit');
        Route::PUT('/dashboard/export/{id}', [ExportController::class, 'update'])->name('dashboard.exportExportdate');
    });
    Route::middleware(['role:finance|admin'])->group(function () {
        Route::resource('finance', FinanceController::class);
        Route::get('/dashboard/finance', [FinanceController::class, 'index'])->name('dashboard.finance.index'); // Ubah route untuk PRD
        Route::get('/finance/{id}/edit', [FinanceController::class, 'edit'])->name('dashboard.finance.edit');
        Route::PUT('/dashboard/finance/{id}', [FinanceController::class, 'update'])->name('dashboard.finance.update');
    });
    Route::middleware(['role:purchase|admin'])->group(function () {
        Route::resource('purchase', PurchaseController::class);
        Route::get('/dashboard/purchase', [PurchaseController::class, 'index'])->name('dashboard.purchase.index'); // Ubah route untuk PRD
        Route::get('/purchase/{id}/edit', [PurchaseController::class, 'edit'])->name('dashboard.purchase.edit');
        Route::PUT('/dashboard/purchase/{id}', [PurchaseController::class, 'update'])->name('dashboard.purchase.update');
    });
    Route::middleware(['role:prd|admin'])->group(function () {
        Route::resource('prd', PrdController::class);
        Route::get('/dashboard/prd', [PrdController::class, 'index'])->name('dashboard.prd.index'); // Ubah route untuk PRD
        Route::get('/prd/{id}/edit', [PrdController::class, 'edit'])->name('dashboard.prd.edit');
        Route::PUT('/dashboard/prd/{id}', [PrdController::class, 'update'])->name('dashboard.prd.update');
    });


    // Route dashboard untuk divisi PRD - UBAH ROUTE






    // Route dashboard untuk divisi lain (jika ada, contoh keuangan)
    // Route::get('/dashboard/keuangan', [KeuanganDashboardController::class, 'index'])->name('dashboard.keuangan'); // Contoh untuk divisi keuangan

    // Route dashboard untuk setiap divisi (Dihapus karena sudah dipindah ke controller spesifik)
    // Route::get('/dashboard/divisions/{division_slug}', [DashboardController::class, 'divisionDashboard'])->name('dashboard.divisions.division_slug'); // Route dinamis DIHAPUS
});

require __DIR__ . '/auth.php';