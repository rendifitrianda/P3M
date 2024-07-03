<?php

namespace App\Http\Controllers\Operator;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanAkhirController extends Controller
{

    public function index()
    {
        return view('operator.laporan_akhir.index');
    }

}
