<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru\Guru;

class GuruController extends Controller
{
    // Tampilkan semua data guru
    public function index()
    {
        $gurus = Guru::all();
        return view('layouts.guru.index', compact('gurus'));
    }

    // Tampilkan form tambah guru
    public function create()
    {
        return view('layouts.guru.create');
    }

    // Simpan data guru baru
    public function store(Request $request)
    {
        
        $validated = $request->validate([

            'foto' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'jabatan' => 'required|string|max:50',
            'nama' => 'required|string|max:50',
            
        ]);


        if ($request->hasfile('foto')){
            $file = $request->file('foto');
            $path = $file->store('foto','public');
            $filename = basename($path);
            $validated['foto'] = $filename;
        };
        Guru::create($validated);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    // Tampilkan halaman detail guru
    public function detail($id)
    {

    }
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('layouts.guru.edit', compact('guru'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'nullable|string|max:50',
            'jabatan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
         
        ]);
    
        $guru = Guru::findOrFail($id);
        $guru->nama = $request->nama;
        $guru->jabatan = $request->jabatan;
    
        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('foto','public');
            $filename = basename($path);
            $guru->foto = $filename; 
        }
        

    
        $guru->save();
    
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    // Hapus data guru
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
    }
}