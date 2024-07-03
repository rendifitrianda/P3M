<?php

namespace App\Http\Controllers\Operator;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jumlah_dosen'] = Dosen::count();
        return view('operator.dashboard', $data);
    }

}
