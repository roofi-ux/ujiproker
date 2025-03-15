<?php

namespace App\Http\Controllers;

use App\Models\hr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hrs = hr::all();
        return view('dashboard.hr.index', ['hrs' => $hrs]);
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

        $hrData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $hrData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        hr::create($hrData);

        return redirect()->route('dashboard.hr.index')->with('success', 'Data hrS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(hr $hr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $hr = hr::findOrFail($id);

        // return view('hr.index', compact('hr')); // Mengembalikan view edit
        // $hr = hr::all();

        return view('dashboard.hr.edit', ['hr' => $hr]);
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

        $hr = hr::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $hrData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($hr->hasil) {
                Storage::disk('public')->delete($hr->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $hrData['hasil'] = $path; // Update path file di data
        }

        $hr->update($hrData);

        return redirect()->route('dashboard.hr.index')->with('success', 'Data HR berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hr $hr)
    {
        //
    }
}
