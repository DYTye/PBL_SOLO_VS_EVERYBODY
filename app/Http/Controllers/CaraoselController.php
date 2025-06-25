<?php

namespace App\Http\Controllers;

use App\Models\Caraosel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaraoselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caraosels = Caraosel::all();
        return view('layouts.caraosel.index',compact('caraosels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.caraosel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string|max:50',
            'gambar' => 'required|file|mimes:jpg,jpeg,png|max:5048'
        ]);

        if ($request -> hasfile('gambar')){
            $file = $request->file('gambar');
            $path = $file->store('gambar','public');
            $filename = basename($path);
            $validated['gambar'] = $filename;
        };
        Caraosel::create($validated);
        return redirect()->route('caraosel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caraosel $caraosel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caraosel $caraosel)
    {
        $caraosels = Caraosel::all();
        return view('layouts.caraosel.update',compact('caraosel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'judul'  => 'required|string|max:50',
            'isi'    => 'required|string|max:50',
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png|max:5048',
        ]);
    
        $caraosel = Caraosel::findOrFail($id);
    
        // Cek kalau ada file gambar baru di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama (opsional)
            if ($caraosel->gambar && Storage::disk('public')->exists('gambar/' . $caraosel->gambar)) {
                Storage::disk('public')->delete('gambar/' . $caraosel->gambar);
            }
    
            // Simpan gambar baru
            $file = $request->file('gambar');
            $path = $file->store('gambar', 'public');
            $validated['gambar'] = basename($path);
        }
    
        // Update data
        $caraosel->update($validated);
    
        return redirect()->route('caraosel.index')->with('success', 'Carousel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $caraosel = Caraosel::findOrFail($id);
        $caraosel->delete();

        return redirect()->route('caraosel.index')->with('success', 'Data caraosel berhasil dihapus');
    }
}
