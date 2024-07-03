<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('login');
    }
    function aksiLogin(Request $request){
        
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ],[
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);



        $cekOperator = Auth::guard('operator')->attempt(['username' => $request->username, 'password' => $request->password]);
        $cekDosen = Auth::guard('dosen')->attempt(['username' => $request->username, 'password' => $request->password]);


 
        if ($cekOperator) {
            $request->session()->regenerate();
            return redirect()->intended('operator/dashboard')->with('success', 'Login Berhasil !');;
        }elseif ($cekDosen) {
            $request->session()->regenerate();
            return redirect()->intended('dosen/dashboard')->with('success', 'Login Berhasil !');;
        }else{
            return back()->with('success', 'Login Gagal !');
        }

        
        

    }
}
