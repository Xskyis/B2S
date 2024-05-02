<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Mapel;
use App\Models\RincianBab;
use Illuminate\Http\Request;

class TambahMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapels = Mapel::all();
        return view('tambahMateri', compact('mapels'));
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
        $request->validate([
            'nama' => 'required|string',
            'id_mapel' => 'required|exists:mapel,id',
            'video' => 'required|file|mimes:mp4,video|max:50000', // Max file size 50MB
        ]);

        $bab = new Bab();
        $bab->nama = $request->nama;
        $bab->id_mapel = $request->id_mapel;
        $bab->save();

        // Simpan video
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $nama_file = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('videos', $nama_file, 'video'); // Simpan file di dalam folder 'backend/assets/video'
            
            // Buat entri rincian bab
            $rincianBab = new RincianBab();
            $rincianBab->id_bab = $bab->id;
            $rincianBab->video = $nama_file;
            $rincianBab->save();
        }

        return redirect()->route('dashboard')->with('success', 'Bab berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
