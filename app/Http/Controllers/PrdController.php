<?php

namespace App\Http\Controllers;

use App\Models\prd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Division;

class PrdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prds = Prd::all();
        return view('dashboard.prd.index', ['prds' => $prds]);

        // Cari divisi berdasarkan slug (misalnya, kita asumsikan slug "prd" sesuai dengan Divisi PRD)
        // $division = Division::where('name', 'prd')->firstOrFail(); // Sesuaikan pencarian divisi, bisa juga berdasarkan slug kolom jika ada

        // // Ambil data PRDS untuk divisi PRD
        // $prds = Prd::whereHas('user', function ($query) use ($division) {
        //     $query->where('division_id', $division->id);
        // })->latest()->paginate(18);

        // // Load view dashboard yang sesuai dengan divisi PRD - SESUAIKAN NAMA VIEW PATH
        // $viewName = "dashboard.prd.index"; // Path view tetap sama (asumsi folder view sudah benar)

        // // Periksa apakah view file ada
        // if (view()->exists($viewName)) {
        //     // Kirim data $prds dan $division ke view
        //     return view($viewName, compact('prds', 'division'));
        // } else {
        //     // Jika view tidak ditemukan, tampilkan view default atau error page
        //     return view('dashboard', ['division' => $division]); // Fallback, atau bisa abort(404)
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
            'persen' => 'required|in:0%,25%,50%,75%,100%', // Validasi untuk option button persen, pastikan nilai yang diterima sesuai pilihan
            'achieve' => 'required|in:Achieve,Not Achieve', // Validasi untuk achieve, pastikan nilai sesuai pilihan
            'ket' => 'required'
        ]);

        $prdData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada
        if ($request->hasFile('hasil_pdf')) {
            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file di storage/app/public/uploads/pdfs
            $prdData['hasil'] = $path; // Simpan path file ke kolom 'hasil' di database
        }

        Prd::create($prdData);

        return redirect()->route('prds.index')->with('success', 'Data PRDS berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(prd $prd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prd = Prd::findOrFail($id);

        // return view('prd.index', compact('prd')); // Mengembalikan view edit
        // $prd = Prd::all();

        return view('dashboard.prd.edit', ['prd' => $prd]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prd $prd)
    {
        // $prd = Prd::findOrFail($id);
        // $prd->update($request->all());

        // return redirect()->route('dashboard.prd.index')->with('success', 'Data PRD berhasil diupdate.'); // Sesuaikan redirect
        // $prd->update($request->all());
        // return redirect()->route('dashboard.prd.index')->with('success', 'Data berhasil diupdate.');

        // Validasi input
        $request->validate([
            'proker' => 'required',
            'renker' => 'required',
            'target' => 'required',
            'hasil_pdf' => 'nullable|file|mimes:pdf|max:2048', // Validasi untuk file PDF, nama input di form adalah 'hasil_pdf'
            'persen' => 'required|in:0%,25%,50%,75%,100%', // Validasi untuk option button persen
            'achieve' => 'required|in:Achieve,Not Achieve', // Validasi untuk achieve
            'ket' => 'nullable',
        ]);

        $prdData = $request->except('hasil_pdf'); // Ambil semua input kecuali file PDF

        // Proses upload file PDF jika ada file baru diupload
        if ($request->hasFile('hasil_pdf')) {
            // Hapus file PDF lama jika ada (opsional, tergantung kebutuhan)
            if ($prd->hasil) {
                Storage::disk('public')->delete($prd->hasil); // Hapus file lama dari storage
            }

            $file = $request->file('hasil_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads/pdfs', $filename, 'public'); // Simpan file baru
            $prdData['hasil'] = $path; // Update path file di data
        }

        $prd->update($prdData);

        return redirect()->route('dashboard.prd.index')->with('success', 'Data PRDS berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prd $prd)
    {
        //
    }
}
