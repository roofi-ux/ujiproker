<?php

namespace App\Http\Controllers;

use App\Models\ga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class gaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gas = ga::all();
        return view('dashboard.ga.index', ['gas' => $gas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'proker' => 'required',
            'renker' => 'required',
            'target' => 'required',
            'hasil_pdf' => 'nullable|file|mimes:pdf|max:2048', // Validasi untuk file PDF, nama input di form adalah 'hasil_pdf'
            'persen' => 'nullable|in:0%,25%,50%,75%,100%', // Validasi untuk option button persen
            'achieve' => 'nullable|in:Achieve,Not Achieve', // Validasi untuk achieve
            'ket' => 'nullable',
        ]);

        $gaData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $gaData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        ga::create($gaData);

        return redirect()->route('dashboard.ga.index')->with('success', 'Data gaS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(ga $ga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $ga = ga::findOrFail($id);

        // return view('ga.index', compact('ga')); // Mengembalikan view edit
        // $ga = ga::all();

        return view('dashboard.ga.edit', ['ga' => $ga]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'proker' => 'required',
            'renker' => 'required',
            'target' => 'required',
            'hasil_pdf' => 'nullable|file|mimes:pdf|max:2048', // Validasi untuk file PDF, nama input di form adalah 'hasil_pdf'
            'persen' => 'nullable|in:0%,25%,50%,75%,100%', // Validasi untuk option button persen
            'achieve' => 'nullable|in:Achieve,Not Achieve', // Validasi untuk achieve
            'ket' => 'nullable',
        ]);

        $ga = ga::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $gaData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($ga->hasil) {
                Storage::disk('public')->delete($ga->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $gaData['hasil'] = $path; // Update path file di data
        }

        $ga->update($gaData);

        return redirect()->route('dashboard.ga.index')->with('success', 'Data ga berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ga $ga)
    {
        //
    }
}
