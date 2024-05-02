<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\RincianBab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RincianBabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        $bab = Bab::findOrFail($id);
        
        // Cari data rincian bab berdasarkan ID bab
        $rincianBab = RincianBab::where('id_bab', $id)->first();

        // Jika data tidak ditemukan, kembalikan dengan pesan kesalahan
        if (!$rincianBab) {
            return redirect()->back()->with('error', 'Rincian bab tidak ditemukan.');
        }

        // Tampilkan halaman rincianPenjelasan.blade.php dengan data rincianBab
        return view('rincianPenjelasan', compact('rincianBab', 'bab'));
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
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            // Hapus rincian bab terkait
            RincianBab::where('id_bab', $id)->delete();

            // Hapus bab
            Bab::destroy($id);

            DB::commit();
            return redirect()->back()->with('success', 'Data bab berhasil dihapus.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menghapus data bab.');
        }
    }
}
