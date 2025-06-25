<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KelebihanSekolah;
use Illuminate\Support\Facades\Storage;

class KelebihanSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelebihans = KelebihanSekolah::all();
        return view('layouts.kelebihan.index',compact('kelebihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.kelebihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kelebihan'=>'required|string',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ( $request->hasFile('gambar')){
            $file = $request->file('gambar');
            $path = $file->store('kelebihan','public');
            $filename = basename($path);
            $validated['gambar'] = $filename;
        };
        KelebihanSekolah::create($validated);
        return redirect()->route('kelebihan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(KelebihanSekolah $kelebihanSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelebihan = KelebihanSekolah::findOrFail($id);
        return view('layouts.kelebihan.update', compact('kelebihan'));
    }

    public function update(Request $request, $id)
    {
        $kelebihan = KelebihanSekolah::findOrFail($id);

        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'kelebihan' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($kelebihan->gambar && Storage::disk('public')->exists('kelebihan/' . $kelebihan->gambar)) {
                Storage::disk('public')->delete('kelebihan/' . $kelebihan->gambar);
            }

            $fileName = time() . '-' . Str::slug($request->file('gambar')->getClientOriginalName());
            $request->file('gambar')->storeAs('kelebihan', $fileName, 'public');
            $kelebihan->gambar = $fileName;
        }

        $kelebihan->kelebihan = $request->kelebihan;
        $kelebihan->save();

        return redirect()->route('kelebihan.index')->with('success', 'Kelebihan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kelebihan = KelebihanSekolah::findOrFail($id);

        if ($kelebihan->gambar && Storage::disk('public')->exists('kelebihan/' . $kelebihan->gambar)) {
            Storage::disk('public')->delete('kelebihan/' . $kelebihan->gambar);
        }

        $kelebihan->delete();
        return redirect()->route('kelebihan.index')->with('success', 'Kelebihan berhasil dihapus!');
    }
}
