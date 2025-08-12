<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('search');
        if ($search) {
            $penduduks = Penduduk::with('wilayah')
                ->where('nama', 'like', '%' . $search . '%')
                ->orWhere('nik', 'like', '%' . $search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $penduduks = Penduduk::with('wilayah')->orderBy('created_at', 'desc')->paginate(10);
        }
        // $penduduks = Penduduk::with('wilayah')->orderBy('created_at', 'desc')->paginate(10);
        return view('penduduk.index', ['penduduks' => $penduduks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('penduduk.create', [
            'wilayahs' => Wilayah::all(), // Assuming you want to show all wilayahs in the create form
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nik' => 'required|digits:16|unique:penduduks,nik',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'wilayah_id' => 'required|exists:wilayahs,id', // Assuming wilayah_id is part of the form
        ]);
        Penduduk::create([
            'nik' => $validated['nik'],
            'nama' => $validated['nama'],
            'alamat' => $validated['alamat'],
            'wilayah_id' => $validated['wilayah_id'] , // Assuming wilayah_id is part of the form
        ]);
        return redirect()->route('penduduk.index')->with('success', 'Penduduk created successfully.');
        // return dd('Penduduk created successfully.', $validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
        $penduduk -> load('wilayah');
        return view('penduduk.show', ['penduduk' => $penduduk]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penduduk $penduduk)
    {
        //
        $penduduk->load('wilayah');
        return view('penduduk.edit', ['penduduk' => $penduduk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        //
        $request->validate([
            'nik' => 'required|string|max:16|unique:penduduks,nik' . $penduduk->id,
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        $penduduk->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('penduduk.index')->with('success', 'Penduduk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk)
    {
        //
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('success', 'Penduduk deleted successfully.');
    }
}