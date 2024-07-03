<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Models\Usulanpenelitian;
use App\Http\Controllers\Controller;

class UsulanController extends Controller
{

    public function index(){

        $data['list'] = Usulanpenelitian::all();
        return view('dosen.usulan.index', $data);
    }


}
