<?php

namespace App\Http\Controllers;

use App\Models\KenanganItem;
use Illuminate\Http\Request;
use App\Models\RaportKenangan;
use Illuminate\Support\Facades\Storage;

class KenanganItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($raport_id)
    {
        $raport = RaportKenangan::with('kelas')->findOrFail($raport_id);
        $kenanganitems = KenanganItem::where('raport_kenangan_id', $raport_id)->get();

        return view('layouts.kenanganitem.index', compact('kenanganitems', 'raport'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kenangan_id)
    {
        $raport = RaportKenangan::with('kelas')->findOrFail($kenangan_id);
        $kenangan = $raport;
        return view('layouts.kenanganitem.create', compact('raport', 'kenangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'halaman' => 'required|string',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'raport_kenangan_id' => 'required|exists:raport_kenangans,id',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('kenangan', 'public');
            $validated['gambar'] = basename($path);
        }

        KenanganItem::create($validated);

        return redirect()->route('kenanganitem.index', $request->raport_kenangan_id)
                         ->with('success', 'Item berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KenanganItem $kenanganItem)
    {
        // Optional: show detail view if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kenanganitem = KenanganItem::with('raport.kelas')->findOrFail($id);
        return view('layouts.kenanganitem.update', compact('kenanganitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $item = KenanganItem::findOrFail($id);

        $item->update($request->all());
    
        $raportKenanganId = $item->raport_kenangan_id;

        $request->validate([
            'deskripsi' => 'required|string',
            'kategori' => 'required|in:siswa,guru,cover,isi',
            'halaman' => 'required|string|max:50',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $kenanganitem = KenanganItem::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($kenanganitem->gambar && Storage::exists('public/kenangan/' . $kenanganitem->gambar)) {
                Storage::delete('public/kenangan/' . $kenanganitem->gambar);
            }

            $path = $request->file('gambar')->store('kenangan', 'public');
            $kenanganitem->gambar = basename($path);
        }

        $kenanganitem->update([
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'halaman' => $request->halaman,
        ]);


    
        return redirect()->route('kenanganitem.index', $raportKenanganId)
                         ->with('success', 'Item kenangan berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kenanganitem = KenanganItem::findOrFail($id);

        if ($kenanganitem->gambar && Storage::exists('public/kenangan/' . $kenanganitem->gambar)) {
            Storage::delete('public/kenangan/' . $kenanganitem->gambar);
        }

        $kenanganitem->delete();

        return redirect()->back()->with('success', 'Item kenangan berhasil dihapus.');
    }
}