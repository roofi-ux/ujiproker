<?php

namespace App\Http\Controllers;

use App\Models\cnc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CncController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cncs = cnc::all();
        return view('dashboard.cnc.index', ['cncs' => $cncs]);
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

        $cncData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $cncData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        cnc::create($cncData);

        return redirect()->route('dashboard.cnc.index')->with('success', 'Data cncS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(cnc $cnc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $cnc = cnc::findOrFail($id);

        // return view('cnc.index', compact('cnc')); // Mengembalikan view edit
        // $cnc = cnc::all();

        return view('dashboard.cnc.edit', ['cnc' => $cnc]);
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

        $cnc = cnc::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $cncData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($cnc->hasil) {
                Storage::disk('public')->delete($cnc->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $cncData['hasil'] = $path; // Update path file di data
        }

        $cnc->update($cncData);

        return redirect()->route('dashboard.cnc.index')->with('success', 'Data cnc berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cnc $cnc)
    {
        //
    }
}
