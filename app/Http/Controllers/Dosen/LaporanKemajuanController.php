<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanKemajuanController extends Controller


{
    public function index()
    {
        return view('dosen.laporan_kemajuan.index');
    }
   
}
