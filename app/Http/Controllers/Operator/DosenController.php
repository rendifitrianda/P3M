<?php

namespace App\Http\Controllers\Operator;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dosen'] = Dosen::count();
        return view('operator.dosen.index', $data);
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('operator.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $dosen = new Dosen;
        $dosen->nama = request('nama');
        $dosen->nidn = request('nidn');
        $dosen->klaster = request('klaster');
        $dosen->institusi = request('institusi');
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
        $dosen->username = request('username');
        if(request('password')) $dosen->password = bcrypt(request('password'));
        $dosen->save();

        // return($dosen);
        return redirect('operator/dosen');
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
