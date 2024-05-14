<?php

namespace App\Http\Controllers;

use App\Models\RequestMateri;
use App\Models\Mapel;
use Illuminate\Http\Request;

class RequestMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data request materi dari database dan menampilkannya dalam bentuk paginasi secara descending
        $requestMateris = RequestMateri::latest()->paginate(10);
        return view('list_request_materi', compact('requestMateris'));
    }

    public function showRequest()
    {
        $mapels = Mapel::all();
        return view('request_materi', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'mapel' => 'required|string',
            'req_materi' => 'required|string'
        ]);

        $requestMateri = new RequestMateri();
        $requestMateri->nama = $request->nama;
        $requestMateri->kelas = $request->kelas;
        $requestMateri->mapel = $request->mapel;
        $requestMateri->req_materi = $request->req_materi;
        $requestMateri->save();
        
        return redirect()->route('request_materi')->with('success', 'Request materi berhasil terkirim!');
    }

}
