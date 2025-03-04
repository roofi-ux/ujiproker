<?php

namespace App\Http\Controllers;

use id;
use App\Models\prd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PrdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prds = Prd::all();
        return view('prd.index', ['prds' => $prds]);
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
        //
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

        return view('prd.edit', ['prd' => $prd]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prd $prd)
    {
        // $prd = Prd::findOrFail($id);
        // $prd->update($request->all());

        // return redirect()->route('dashboard.prd.index')->with('success', 'Data PRD berhasil diupdate.'); // Sesuaikan redirect
        $prd->update($request->all());
        return redirect()->route('dashboard.prd.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prd $prd)
    {
        //
    }
}
