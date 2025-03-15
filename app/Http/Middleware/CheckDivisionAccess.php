<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\models\User;

class CheckDivisionAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$divisions
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$divisions)
    {
        $user = Auth::user();

        // Asumsi Anda memiliki cara untuk menentukan apakah user adalah admin
        // Contoh: cek role atau kolom is_admin di tabel users
        if ($user && $this->isAdmin($user)) {
            return $next($request); // Admin memiliki akses ke semua divisi
        }

        if ($user && $user->division) {
            $userDivisionSlug = strtolower(str_replace(' ', '_', $user->division->name));
            $requestedDivisionSlug = $request->route('division_slug'); // Ambil slug divisi dari parameter route

            // Jika tidak ada divisi yang ditentukan di route, atau divisi yang diminta sesuai dengan user
            if (empty($divisions) || in_array($userDivisionSlug, $divisions)) {
                if ($requestedDivisionSlug === null || $requestedDivisionSlug === $userDivisionSlug) {
                    return $next($request);
                }
            }
        }

        // Jika tidak memenuhi syarat, redirect atau tampilkan error
        return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        // Atau bisa juga: abort(403, 'Anda tidak memiliki akses ke halaman ini.');
    }

    /**
     * Cek apakah user adalah admin.
     * Anda perlu mengimplementasikan logika ini sesuai dengan sistem admin Anda.
     * Contoh: cek role 'admin' atau kolom 'is_admin' di tabel users.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    protected function isAdmin($user)
    {
        // Contoh jika Anda menggunakan Spatie Roles & Permissions
        // return $user->hasRole('admin');

        // Contoh jika Anda memiliki kolom is_admin di tabel users
        return $user->is_admin === 1; // Asumsi 1 berarti admin
    }
}