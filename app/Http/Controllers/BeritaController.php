<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = KategoriBerita::all();
        $beritas = Berita::all();
        return view('layouts.berita.index', compact('beritas','kategoris'));
    }

    public function beritashow($id)
    {
        $berita = Berita::with('kategori')->findOrFail($id);
        return view('layouts.frontend.show', compact('berita'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = KategoriBerita::all();
        return view('layouts.berita.create',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_berita' => 'required|string|',
            'isi_berita' => 'required|string',
            'gambar' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'kategori_id' => 'nullable|exists:kategori_beritas,id',
        ]);

        if ($request->hasfile('gambar')){
            $file = $request->file('gambar');
            $path = $file->store('gambar','public');
            $filename = basename($path);
            $validated['gambar'] = $filename;
           

        };
        
        $berita = Berita::create($validated);
        return redirect()->route('berita.index');
        
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategoris = KategoriBerita::all();
        $berita = Berita::findOrFail($id);
        return view('layouts.berita.update',compact('berita','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_berita' => 'required|string|',
            'isi_berita' => 'required|string',
            'gambar' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'kategori_id' => 'nullable|exists:kategori_beritas,id'
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/gambar');
            $berita->gambar = basename($gambarPath);
        }
        $berita->kategori_id = $request->kategori_id;

        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diupdate');
    
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Data berita berhasil dihapus');
    }
}
