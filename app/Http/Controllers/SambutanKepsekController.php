<?php

namespace App\Http\Controllers;

use App\Models\SambutanKepsek;
use Illuminate\Http\Request;

class SambutanKepsekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sambutans = SambutanKepsek::all();
        return view('layouts.sambutan.index',compact('sambutans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sambutans = SambutanKepsek::first();
        return view('layouts.sambutan.create',compact('sambutans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sambutan' => 'required|string',
        ]);

        $sambutan = SambutanKepsek::first();
        if($sambutan){
            $sambutan->update($validated);
        }
        else{
            SambutanKepsek::create($validated);
        }

        $sambutan = SambutanKepsek::all();
        return redirect()->route('sambutan.index')->with('success', 'Sambutan berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(SambutanKepsek $sambutanKepsek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SambutanKepsek $sambutanKepsek)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SambutanKepsek $sambutanKepsek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SambutanKepsek $sambutanKepsek)
    {
        //
    }
}
