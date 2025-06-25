<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visis = VisiMisi::all();
        return view('layouts.visimisi.index',(compact('visis')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $visi = DB::table('visi_misi')->where('jenis', 'visi')->pluck('isi');
        $misi = DB::table('visi_misi')->where('jenis', 'misi')->pluck('isi');
        $tujuan = DB::table('visi_misi')->where('jenis', 'tujuan')->pluck('isi');
        return view('layouts.visimisi.create',compact('visi','misi','tujuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Hapus semua data lama (biar nggak duplikat)
        VisiMisi::whereIn('jenis', ['visi', 'misi', 'tujuan'])->delete();
    
        // Simpan ulang semua data baru
        $data = [];
    
        foreach ($request->visi as $isi) {
            if ($isi) {
                $data[] = ['jenis' => 'visi', 'isi' => $isi];
            }
        }
    
        foreach ($request->misi as $isi) {
            if ($isi) {
                $data[] = ['jenis' => 'misi', 'isi' => $isi];
            }
        }
    
        foreach ($request->tujuan as $isi) {
            if ($isi) {
                $data[] = ['jenis' => 'tujuan', 'isi' => $isi];
            }
        }
    
        VisiMisi::insert($data);
    
        return redirect()->route('visi.index')->with('success', 'Data berhasil diperbarui!');
    }
    
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisiMisi $visiMisi)
    {
        //
    }
}
