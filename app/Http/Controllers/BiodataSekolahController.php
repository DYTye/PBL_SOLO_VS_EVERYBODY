<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Models\BiodataSekolah;
use Illuminate\Support\Facades\DB;

class BiodataSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = BiodataSekolah::all();
        return view('layouts.biodata.index',compact('biodata'));
    }

    public function profil()
    {
        $biodata = BiodataSekolah::all();
        $visis = VisiMisi::all();
        return view('layouts.frontend.profil_singkat',compact('biodata','visis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $biodata = BiodataSekolah::first();
        return view('layouts.biodata.create', compact('biodata'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_sekolah' => 'required|string',
            'nomor_statistik_sekolah' => 'required|string',
            'nomor_identitas_sekolah' => 'required|string',
            'NPSN' => 'required|string',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string',
            'status' => 'required|string',
            'kelompok_tk' => 'required|string',
            'akreditasi' => 'required|string',
            'tahun_berdiri' => 'nullable|numeric',
            'tahun_diresmikan' => 'required|date',
            'kegiatan_belajar' => 'required|string',
        ]);
    
        $biodata = BiodataSekolah::first();
    
        if ($biodata) {
            $biodata->update($validated);
        } else {
            BiodataSekolah::create($validated);
        }
    
        $biodata = BiodataSekolah::all();
        return view('layouts.biodata.index',compact('biodata'));
    }
    

    /**
     * Display the specified resource.
     */
    public function show(BiodataSekolah $biodataSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BiodataSekolah $biodataSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiodataSekolah $biodataSekolah)
    {
        //
    }
}
