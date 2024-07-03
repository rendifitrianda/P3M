<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;




// Authenticate
Route::prefix('/')->group(function(){
    // Option controller
    Route::controller(AuthController::class)->group(function () {
        Route::get('/',  'index')->name('login');
        Route::post('/login',  'aksiLogin');
    
    });

});

// Route::get('welcome', function () {
//     return view('welcome');
// });

// Route::get('testione', function () {
//     return view('components.app');
// });

//HAK AKSES OPERATOR
Route::prefix('operator')->group(function(){
    include('_route/Operator.php');
});

// HAK AKSES DOSEN
Route::prefix('dosen')->group(function(){
    include('_route/Dosen.php');
});





