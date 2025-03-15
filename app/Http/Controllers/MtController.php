<?php

namespace App\Http\Controllers;

use App\Models\mt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class mtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mts = mt::all();
        return view('dashboard.mt.index', ['mts' => $mts]);
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

        $mtData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $mtData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        mt::create($mtData);

        return redirect()->route('dashboard.mt.index')->with('success', 'Data mtS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(mt $mt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $mt = mt::findOrFail($id);

        // return view('mt.index', compact('mt')); // Mengembalikan view edit
        // $mt = mt::all();

        return view('dashboard.mt.edit', ['mt' => $mt]);
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

        $mt = mt::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $mtData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($mt->hasil) {
                Storage::disk('public')->delete($mt->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $mtData['hasil'] = $path; // Update path file di data
        }

        $mt->update($mtData);

        return redirect()->route('dashboard.mt.index')->with('success', 'Data mt berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mt $mt)
    {
        //
    }
}
