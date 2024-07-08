<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Models\Usulanpenelitian;
use App\Http\Controllers\Controller;

class UsulanController extends Controller
{

    public function index(){

        $data['Usulan'] = Usulanpenelitian::all();
        return view('dosen.usulan.index', $data);
    }

    public function create()
    {
        return view('dosen.usulan.create');
    }

    public function store()
    {   
        $penelitian_usulan_baru = new Usulanpenelitian;
        
        $penelitian_usulan_baru->ketua = request('ketua');
        $penelitian_usulan_baru->judul = request('judul');
        $penelitian_usulan_baru->bidang_fokus = request('bidang_fokus');
        $penelitian_usulan_baru->tahun_pelaksanaan = request('tahun_pelaksanaan');
        $penelitian_usulan_baru->peran = request('peran');
        $penelitian_usulan_baru->status_usulan = request('status_usulan');
        $penelitian_usulan_baru->hasil_penilaian = request('hasil_penilaian');

        $penelitian_usulan_baru->save();
        // return $penelitian_usulan_baru;
        // dd ($penelitian_usulan_baru);
    }
}
