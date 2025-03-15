<?php

namespace App\Http\Controllers;

use App\Models\ecm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EcmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecms = ecm::all();
        return view('dashboard.ecm.index', ['ecms' => $ecms]);
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

        $ecmData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $ecmData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        ecm::create($ecmData);

        return redirect()->route('dashboard.ecm.index')->with('success', 'Data ecmS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(ecm $ecm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $ecm = ecm::findOrFail($id);

        // return view('ecm.index', compact('ecm')); // Mengembalikan view edit
        // $ecm = ecm::all();

        return view('dashboard.ecm.edit', ['ecm' => $ecm]);
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

        $ecm = ecm::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $ecmData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($ecm->hasil) {
                Storage::disk('public')->delete($ecm->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $ecmData['hasil'] = $path; // Update path file di data
        }

        $ecm->update($ecmData);

        return redirect()->route('dashboard.ecm.index')->with('success', 'Data ecm berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ecm $ecm)
    {
        //
    }
}
