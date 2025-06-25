<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;
use App\Models\Tahunajar;
use App\Models\KenanganItem;
use Illuminate\Http\Request;
use App\Models\RaportKenangan;
use Spatie\Browsershot\Browsershot;

class RaportKenanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raports = RaportKenangan::all();
        return view('layouts.kenangan.index',compact('raports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelasList = Kelas::all();
        $THL = Tahunajar::where('status', 'aktif')->get();
        return view('layouts.kenangan.create', compact('kelasList','THL'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:225',
            'kelas_id' => 'required|exists:kelas,id|unique:raport_kenangans,kelas_id',
            'tahun_ajar_id' => 'required|exists:tahun_ajars,id',
        ]);

        RaportKenangan::create($validated);

        $raports = RaportKenangan::all();
        return redirect()->route('kenang.index')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        if (request()->has('pdf')) {
            Auth::loginUsingId(1); // Ini sekarang valid
        }        
    

        $raport = RaportKenangan::with(['kelas', 'items'])->findOrFail($id);
        return view('layouts.kenangan.show', compact('raport'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelasList = Kelas::all();
        $THL = Tahunajar::where('status', 'aktif')->get();
        $kenangan = RaportKenangan::findOrfail($id);
        return view('layouts.kenangan.update', compact('kelasList','THL','kenangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'nullable|string|max:225',
            'kelas_id' => 'required|exists:kelas,id|unique:raport_kenangans,kelas_id',
            'tahun_ajar_id' => 'nullable|exists:tahun_ajars,id',
        ]);
    
        $raport = RaportKenangan::findOrFail($id);
        $raport->judul = $request->judul;
        $raport->kelas_id = $request->kelas_id;
        $raport->tahun_ajar_id = $request->tahun_ajar_id;
        $raport->save();
    
        return redirect()->route('kenang.index')->with('success', 'Berhasil diperbarui');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $raport = RaportKenangan::findOrFail($id);
        $raport->delete();

        return redirect()->route('kenang.index')->with('success', 'berhasil dihapus');
    }

    public function fe()
    {
        $raports = RaportKenangan::with(['kelas', 'tahunajar'])->get();
        return view('layouts.frontend.raportkenangan', compact('raports'));
    }
    



    public function exportPdf($id)
    {
        $url = route('kenang.show', $id) . '?pdf=1'; // penting!
        $pdfPath = storage_path("app/public/raport-kenangan-$id.pdf");
    
        Browsershot::url($url)
            ->setNodeBinary('C:\Program Files\nodejs\node.exe')
            ->setNpmBinary('C:\Program Files\nodejs\npm.cmd')
            ->windowSize(1200, 2000)
            ->waitUntilNetworkIdle()
            ->timeout(60)
            ->savePdf($pdfPath);
    
        return response()->download($pdfPath);
    }
    

}
