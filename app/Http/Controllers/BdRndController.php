<?php

namespace App\Http\Controllers;

use App\Models\bdRnd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BdRndController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bdrnds = bdRnd::all();
        return view('dashboard.bdrnd.index', ['bdrnds' => $bdrnds]);
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

        $bdrndData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $bdrndData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        bdrnd::create($bdrndData);

        return redirect()->route('dashboard.bdrnd.index')->with('success', 'Data bdrnds berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(bdrnd $bdrnd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $bdrnd = bdrnd::findOrFail($id);

        // return view('bdrnd.index', compact('bdrnd')); // Mengembalikan view edit
        // $bdrnd = bdrnd::all();

        return view('dashboard.bdrnd.edit', ['bdrnd' => $bdrnd]);
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

        $bdrnd = bdrnd::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $bdrndData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($bdrnd->hasil) {
                Storage::disk('public')->delete($bdrnd->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $bdrndData['hasil'] = $path; // Update path file di data
        }

        $bdrnd->update($bdrndData);

        return redirect()->route('dashboard.bdrnd.index')->with('success', 'Data bdrnd berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bdrnd $bdrnd)
    {
        //
    }
}
