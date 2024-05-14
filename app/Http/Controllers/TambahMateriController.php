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
            'kelas' => 'required|string',
            'link_video' => 'required|string'
        ]);

        $bab = new Bab();
        $bab->nama = $request->nama;
        $bab->id_mapel = $request->id_mapel;
        $bab->kelas = $request->kelas;
        $bab->save();

        // Proses ambil ID video dari link YouTube
        $url = $request->link_video;

        // Cari posisi 'youtu.be/'
        $startPos = strpos($url, 'youtu.be/') + strlen('youtu.be/');

        // Ekstrak karakter setelah 'youtu.be/'
        $videoId = substr($url, $startPos);

        // Cari posisi '/' setelah video ID
        $endPos = strpos($videoId, '/');
        if ($endPos !== false) {
            // Jika ditemukan '/', ambil hanya karakter sebelumnya
            $videoId = substr($videoId, 0, $endPos);
        }

        // Buat entri rincian bab
        $rincianBab = new RincianBab();
        $rincianBab->id_bab = $bab->id;
        $rincianBab->video = $videoId;
        $rincianBab->save();

        return redirect()->route('dashboard')->with('success', 'Materi berhasil ditambahkan, silahkan cek mapel terkait.');
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
