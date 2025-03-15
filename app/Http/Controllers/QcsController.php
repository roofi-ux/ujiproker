<?php

namespace App\Http\Controllers;

use App\Models\qcs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class qcsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qcss = qcs::all();
        return view('dashboard.qcs.index', ['qcss' => $qcss]);
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

        $qcsData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $qcsData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        qcs::create($qcsData);

        return redirect()->route('dashboard.qcs.index')->with('success', 'Data qcsS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(qcs $qcs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $qcs = qcs::findOrFail($id);

        // return view('qcs.index', compact('qcs')); // Mengembalikan view edit
        // $qcs = qcs::all();

        return view('dashboard.qcs.edit', ['qcs' => $qcs]);
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

        $qcs = qcs::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $qcsData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($qcs->hasil) {
                Storage::disk('public')->delete($qcs->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $qcsData['hasil'] = $path; // Update path file di data
        }

        $qcs->update($qcsData);

        return redirect()->route('dashboard.qcs.index')->with('success', 'Data qcs berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qcs $qcs)
    {
        //
    }
}
