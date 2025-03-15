<?php

namespace App\Http\Controllers;

use App\Models\mkt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class mktController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mkts = mkt::all();
        return view('dashboard.mkt.index', ['mkts' => $mkts]);
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

        $mktData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $mktData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        mkt::create($mktData);

        return redirect()->route('dashboard.mkt.index')->with('success', 'Data mktS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(mkt $mkt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $mkt = mkt::findOrFail($id);

        // return view('mkt.index', compact('mkt')); // Mengembalikan view edit
        // $mkt = mkt::all();

        return view('dashboard.mkt.edit', ['mkt' => $mkt]);
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

        $mkt = mkt::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $mktData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($mkt->hasil) {
                Storage::disk('public')->delete($mkt->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $mktData['hasil'] = $path; // Update path file di data
        }

        $mkt->update($mktData);

        return redirect()->route('dashboard.mkt.index')->with('success', 'Data mkt berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mkt $mkt)
    {
        //
    }
}
