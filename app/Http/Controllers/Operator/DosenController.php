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
        $data['list_dosen'] = Dosen::all();
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

        request()->validate(Dosen::$rule, Dosen::$isi);
        
        $dosen = new Dosen;
        $dosen->nama = request('nama');
        $dosen->nidn = request('nidn');
        $dosen->institusi = request('institusi');
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
        $dosen->username = request('username');
        if(request('password')) $dosen->password = bcrypt(request('password'));

        $dosen->save();

        // return $dosen;
        // dd($dosen);
        return redirect('operator/dosen')->with('success', 'Data Berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        $data['dosen'] = $dosen;
        return view('operator.dosen.show ', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $data['dosen'] = $dosen;
        return view('operator.dosen.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Dosen $dosen){

        if(request('password') != null){
            $dosen->nama = request('nama');
            $dosen->nidn = request('nidn');
            $dosen->institusi = request('institusi');
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
            $dosen->username = request('username');
            $dosen->password = bcrypt(request('password'));
            $dosen->update();
            return redirect('operator/dosen')->with('success', 'Data Berhasil di diupdate');
        }else{
            $dosen->nama = request('nama');
            $dosen->nidn = request('nidn');
            $dosen->institusi = request('institusi');
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
            $dosen->username = request('username');
            $dosen->update();
            return redirect('operator/dosen')->with('success', 'Data Berhasil di diupdate');
        }

      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Dosen $dosen)
    {
    
        $dosen->delete();
     
        
        return redirect('operator/dosen')->with('success', 'Data Berhasil dihapus !');
    }
}
