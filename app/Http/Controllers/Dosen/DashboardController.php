<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $data['dosen'] = Auth::guard('dosen')->user();
        // return $data;
        return view('dosen.dashboard', $data);
    }

}
