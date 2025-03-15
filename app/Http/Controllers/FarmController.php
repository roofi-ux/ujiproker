<?php

namespace App\Http\Controllers;

use App\Models\farm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class farmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farms = farm::all();
        return view('dashboard.farm.index', ['farms' => $farms]);
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

        $farmData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $farmData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        farm::create($farmData);

        return redirect()->route('dashboard.farm.index')->with('success', 'Data farmS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(farm $farm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $farm = farm::findOrFail($id);

        // return view('farm.index', compact('farm')); // Mengembalikan view edit
        // $farm = farm::all();

        return view('dashboard.farm.edit', ['farm' => $farm]);
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

        $farm = farm::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $farmData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($farm->hasil) {
                Storage::disk('public')->delete($farm->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $farmData['hasil'] = $path; // Update path file di data
        }

        $farm->update($farmData);

        return redirect()->route('dashboard.farm.index')->with('success', 'Data farm berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(farm $farm)
    {
        //
    }
}
