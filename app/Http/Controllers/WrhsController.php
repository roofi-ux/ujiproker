<?php

namespace App\Http\Controllers;

use App\Models\wrhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WrhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wrhss = wrhs::all();
        return view('dashboard.wrhs.index', ['wrhss' => $wrhss]);
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

        $wrhsData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $wrhsData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        wrhs::create($wrhsData);

        return redirect()->route('dashboard.wrhs.index')->with('success', 'Data wrhsS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(wrhs $wrhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $wrhs = wrhs::findOrFail($id);

        // return view('wrhs.index', compact('wrhs')); // Mengembalikan view edit
        // $wrhs = wrhs::all();

        return view('dashboard.wrhs.edit', ['wrhs' => $wrhs]);
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

        $wrhs = wrhs::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $wrhsData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($wrhs->hasil) {
                Storage::disk('public')->delete($wrhs->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $wrhsData['hasil'] = $path; // Update path file di data
        }

        $wrhs->update($wrhsData);

        return redirect()->route('dashboard.wrhs.index')->with('success', 'Data wrhs berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wrhs $wrhs)
    {
        //
    }
}
