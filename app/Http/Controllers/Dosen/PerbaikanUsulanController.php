<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerbaikanUsulanController extends Controller
{
    public function index()
    {
        return view('dosen.perbaikan_usulan.index');
    }
}

