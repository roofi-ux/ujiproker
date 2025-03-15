<?php

namespace App\Http\Controllers;

use App\Models\finance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class financeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $finances = finance::all();
        return view('dashboard.finance.index', ['finances' => $finances]);
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

        $financeData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $financeData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        finance::create($financeData);

        return redirect()->route('dashboard.finance.index')->with('success', 'Data financeS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $finance = finance::findOrFail($id);

        // return view('finance.index', compact('finance')); // Mengembalikan view edit
        // $finance = finance::all();

        return view('dashboard.finance.edit', ['finance' => $finance]);
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

        $finance = finance::findOrFail($id); // Pastikan Anda mengambil model berdasarkan $id

        $financeData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($finance->hasil) {
                Storage::disk('public')->delete($finance->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $financeData['hasil'] = $path; // Update path file di data
        }

        $finance->update($financeData);

        return redirect()->route('dashboard.finance.index')->with('success', 'Data finance berhasil diupdate.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(finance $finance)
    {
        //
    }
}
