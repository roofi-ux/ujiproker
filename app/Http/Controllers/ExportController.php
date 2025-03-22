<?php

namespace App\Http\Controllers;

use App\Models\export;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exports = export::all();
        return view('dashboard.export.index', ['exports' => $exports]);
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

        $exportData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $exportData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        export::create($exportData);

        return redirect()->route('dashboard.export.index')->with('success', 'Data exportS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(export $export)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $export = export::findOrFail($id);

        // return view('export.index', compact('export')); // Mengembalikan view edit
        // $export = export::all();

        return view('dashboard.export.edit', ['export' => $export]);
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

        $export = export::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $exportData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($export->hasil) {
                Storage::disk('public')->delete($export->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $exportData['hasil'] = $path; // Update path file di data
        }

        $export->update($exportData);

        return redirect()->route('dashboard.export.index')->with('success', 'Data export berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(export $export)
    {
        //
    }
}
