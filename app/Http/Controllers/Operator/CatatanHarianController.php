<?php

namespace App\Http\Controllers\Operator;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatatanHarianController extends Controller
{

    public function index()
    {
        return view('operator.catatan_harian.index');
    }

}
