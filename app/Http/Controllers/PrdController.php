<?php

namespace App\Http\Controllers;

use id;
use App\Models\prd;
use Illuminate\Http\Request;

class PrdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit(prd $prd, $id)
    {
        $prd = Prd::findOrFail($id);
        return view('prds.edit', compact('prd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prd $prd, $id)
    {
        $prd = Prd::findOrFail($id);
        $prd->update($request->all());

        return redirect()->route('prds.index')->with('success', 'Data PRD berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prd $prd)
    {
        //
    }
}
