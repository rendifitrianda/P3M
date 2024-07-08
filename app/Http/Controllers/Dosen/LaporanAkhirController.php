<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanAkhirController extends Controller
{
    public function index()
    {
        return view('Dosen.laporan_akhir.index');
    }
}
