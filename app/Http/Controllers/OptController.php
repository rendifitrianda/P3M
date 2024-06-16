<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class OptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_dosen'] = Dosen::all();
        return view('frontend.dashboard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {
        
        $dosen = new Dosen;
        $dosen->nama = request('nama');
        $dosen->klaster = request('klaster');
        $dosen->jenjang_pendidikan = request('jenjang_pendidikan');
        $dosen->program_studi = request('program_studi');
        $dosen->nomor_ktp = request('nomor_ktp');
        $dosen->jabatan_akademik = request('jabatan_akademik');
        $dosen->alamat = request('alamat');
        $dosen->tanggal_lahir = request('tanggal_lahir');
        $dosen->tempat_lahir = request('tempat_lahir');
        $dosen->nomor_hp = request('nomor_hp');
        $dosen->alamat_surel = request('alamat_surel');
        $dosen->website_personal = request('website_personal');
        $dosen->save();

        // return $dosen;
        // dd($dosen);
        return redirect('frontend/dashboard')->with('create', 'Data Berhasil');
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
    public function delete(Dosen $dosen)
    {
        $dosen->delete();
     
        
        return redirect('frontend/dashboard');
    }
}
