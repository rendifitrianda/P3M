<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OptController;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('testione', function () {
    return view('components.app');
});

Route::get('reguler', function () {
    return view('frontend.opt.usulan_reguler');
});

Route::get('perbaikan usulan', function () {
    return view('frontend.opt.perbaikan_usulan');
});

Route::get('catatan harian', function () {
    return view('frontend.opt.catatan_harian');
});

Route::get('admin/opt', [OptController::class, 'index']);
