<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard'); // View dashboard default (jika ada)
    }

    public function divisionDashboard(string $division_slug): View
    {
        // Cari divisi berdasarkan slug
        $division = Division::where('name', str_replace('_', ' ', $division_slug))->firstOrFail();

        // Atau, jika Anda menyimpan slug di kolom 'slug' di tabel 'divisions'
        // $division = Division::where('slug', $division_slug)->firstOrFail();

        // Load view dashboard yang sesuai dengan divisi
        $viewName = "dashboard.divisions.{$division_slug}"; // Contoh: dashboard.divisions.divisi_prd

        // Periksa apakah view file ada
        if (view()->exists($viewName)) {
            return view($viewName, ['division' => $division]); // Kirim data divisi ke view
        } else {
            // Jika view tidak ditemukan, tampilkan view default atau error page
            return view('dashboard', ['division' => $division]); // Fallback ke dashboard default, atau bisa abort(404)
        }
    }
}