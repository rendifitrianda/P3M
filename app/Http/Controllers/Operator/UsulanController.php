<?php

namespace App\Http\Controllers\Operator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsulanController extends Controller
{

    public function index()
    {

        return view('operator.usulan.index');
    }

}
