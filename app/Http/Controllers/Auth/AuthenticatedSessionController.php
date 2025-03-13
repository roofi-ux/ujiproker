<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(route('dashboard', absolute: false));


        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user(); // Ambil user yang baru login

        // dd([
        //     'user_division_id' => $user->division_id,
        //     'division_name' => $user->division ? $user->division->name : null, // Tambahkan pengecekan null untuk relasi division
        //     'division_slug_generated' => $user->division_id ? strtolower(str_replace(' ', '_', $user->division->name)) : null,
        // ]);

        // Tentukan redirect berdasarkan division_id user
        if ($user->division_id) {
            $divisionName = $user->division->name; // Ambil nama divisi dari relasi
            $divisionSlug = strtolower(str_replace(' ', '_', $divisionName)); // Buat slug dari nama divisi untuk route

            // Redirect ke route dashboard divisi yang spesifik
            return redirect()->route(route: "dashboard." . $divisionSlug . ".index"); // Contoh: dashboard.divisions.divisi_prd
        } else {
            // Jika user tidak memiliki divisi, redirect ke dashboard default (jika ada) atau halaman lain
            return redirect()->intended(config('app.home')); // Redirect ke HOME jika tidak ada divisi
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
