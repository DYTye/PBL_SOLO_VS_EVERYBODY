<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Caraosel;
use App\Models\Dashboard;
use App\Models\Guru\Guru;
use App\Models\InfoAkademik;
use App\Models\KelebihanSekolah;
use App\Models\SambutanKepsek;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kepsek = Guru::where('jabatan', 'Kepala sekolah')->first(); 
        $gurus = Guru::all();
        $beritas = Berita::all();
        $visis = VisiMisi::all();
        $caraosels = Caraosel::all();
        $sambutans = SambutanKepsek::first();
        $infos = InfoAkademik::first(); 
        return view('layouts.frontend.Dashboard', compact('kepsek', 'gurus','beritas','visis','caraosels','sambutans','infos'));
    }

    // DashboardController.php
    public function profil()
    {
        $visis = VisiMisi::all();
        return view('layouts.frontend.profil_singkat    ',compact('visis'));
    }

    public function sejarah()
    {
        return view('layouts.frontend.sejarah');
    }

    public function berita()
    {   
        $beritas = Berita::all();
        return view('layouts.frontend.berita',compact('beritas'));
    }

    public function kelebihanfe()

    {
        $kelebihans = KelebihanSekolah::all();
        return view('layouts.frontend.kelebihanfe',compact('kelebihans'));
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
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
