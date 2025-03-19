<?php

namespace App\Http\Controllers;

use App\Models\qcp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QcpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qcps = qcp::all();
        return view('dashboard.qcp.index', ['qcps' => $qcps]);
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

        $qcpData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $qcpData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        qcp::create($qcpData);

        return redirect()->route('dashboard.qcp.index')->with('success', 'Data qcpS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(qcp $qcp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $qcp = qcp::findOrFail($id);

        // return view('qcp.index', compact('qcp')); // Mengembalikan view edit
        // $qcp = qcp::all();

        return view('dashboard.qcp.edit', ['qcp' => $qcp]);
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

        $qcp = qcp::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $qcpData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($qcp->hasil) {
                Storage::disk('public')->delete($qcp->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $qcpData['hasil'] = $path; // Update path file di data
        }

        $qcp->update($qcpData);

        return redirect()->route('dashboard.qcp.index')->with('success', 'Data qcp berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qcp $qcp)
    {
        //
    }
}
