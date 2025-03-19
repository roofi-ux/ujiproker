<?php

namespace App\Http\Controllers;

use App\Models\protech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProtechController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protechs = protech::all();
        return view('dashboard.protech.index', ['protechs' => $protechs]);
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

        $protechData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $protechData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        protech::create($protechData);

        return redirect()->route('dashboard.protech.index')->with('success', 'Data protechS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(protech $protech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $protech = protech::findOrFail($id);

        // return view('protech.index', compact('protech')); // Mengembalikan view edit
        // $protech = protech::all();

        return view('dashboard.protech.edit', ['protech' => $protech]);
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

        $protech = protech::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $protechData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($protech->hasil) {
                Storage::disk('public')->delete($protech->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $protechData['hasil'] = $path; // Update path file di data
        }

        $protech->update($protechData);

        return redirect()->route('dashboard.protech.index')->with('success', 'Data protech berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(protech $protech)
    {
        //
    }
}
