<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatatanHarianController extends Controller
{
    public function index()
    {
        return view('Dosen.catatan_harian.index');
    }
}
