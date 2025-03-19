<?php

namespace App\Http\Controllers;

use App\Models\qa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qas = qa::all();
        return view('dashboard.qa.index', ['qas' => $qas]);
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

        $qaData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $qaData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        qa::create($qaData);

        return redirect()->route('dashboard.qa.index')->with('success', 'Data qaS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(qa $qa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $qa = qa::findOrFail($id);

        // return view('qa.index', compact('qa')); // Mengembalikan view edit
        // $qa = qa::all();

        return view('dashboard.qa.edit', ['qa' => $qa]);
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

        $qa = qa::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $qaData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($qa->hasil) {
                Storage::disk('public')->delete($qa->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $qaData['hasil'] = $path; // Update path file di data
        }

        $qa->update($qaData);

        return redirect()->route('dashboard.qa.index')->with('success', 'Data qa berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qa $qa)
    {
        //
    }
}
