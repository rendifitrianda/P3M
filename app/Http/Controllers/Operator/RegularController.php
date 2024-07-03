<?php

namespace App\Http\Controllers\Operator;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularController extends Controller
{

    public function index()
    {
        $data['jumlah_dosen'] = Dosen::count();
        return view('operator.regular.index', $data);
    }

}
