<?php

namespace App\Http\Controllers;

use App\Models\InfoAkademik;
use Illuminate\Http\Request;

class InfoAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.akademik.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info = InfoAkademik::first();
        return view('layouts.akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jumlah_siswa' => 'required|string',
            'jumlah_kelas' => 'required|string',
            'jumlah_guru' => 'required|string',
            'jumlah_prestasi' => 'required|string'
        ]);

        $info = InfoAkademik::first();
        if($info){
            $info->update($validated);
        }
        else{
            InfoAkademik::create($validated);
        }

        $info = InfoAkademik::all();
        return redirect()->route('info.index')->with('success','berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(InfoAkademik $infoAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfoAkademik $infoAkademik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InfoAkademik $infoAkademik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfoAkademik $infoAkademik)
    {
        //
    }
}
