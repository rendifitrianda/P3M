<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptController;




Route::get('welcome', function () {
    return view('welcome');
});

Route::get('testione', function () {
    return view('components.app');
});

//HAK AKSES OPERATOR

//DASHBOARD
Route::get('frontend/dashboard', [OptController::class, 'index']);

Route::get('frontend/dashboard/create', [OptController::class, 'create']);

Route::post('frontend/dashboard', [OptController::class, 'store']);

Route::get('frontend/dashboard/{dosen}', [OptController::class, 'edit']);

Route::post('frontend/dashboard/{dosen}', [OptController::class, 'update']);

Route::delete('frontend/dashboard/{dosen}', [OptController::class, 'delete']);

//MONITORING

Route::get('reguler', function () {
    return view('frontend.monitoring.usulan_reguler.index');
});

Route::get('perbaikan usulan', function () {
    return view('frontend.monitoring.perbaikan_usulan.index');
});

Route::get('laporan kemajuan', function () {
    return view('frontend.monitoring.laporan_kemajuan.index');
});

Route::get('laporan akhir', function () {
    return view('frontend.monitoring.laporan_akhir.index');
});

Route::get('catatan harian', function () {
    return view('frontend.monitoring.catatan_harian.index');
});


//PENELITIAN


Route::get('profile lembaga', function () {
    return view('frontend.data_pendukung.profile_lembaga.index');
});

Route::get('cari akun', function () {
    return view('frontend.data_pendukung.cari_akun.index');
});

Route::get('edit_opt', function () {
    return view('frontend.data_pendukung.profile_lembaga.edit');
});

Route::get('singkronasi prodi', function () {
    return view('frontend.data_pendukung.singkronasi_prodi.index');
});

Route::get('singkronasi dosen', function () {
    return view('frontend.data_pendukung.singkronasi_dosen.index');
});



// HAK AKSES DOSEN

// Route::get('layout/dashboard', [OptController::class, 'index']);

// Route::get('layout/dashboard/create', [OptController::class, 'create']);

// Route::post('layout/dashboard', [OptController::class, 'store']);

// Route::delete('layout/dashboard/{dosen}', [OptController::class, 'delete']);
   

//PENELITIAN

Route::get('dashboard', function () {
    return view('layout.dashboard.index');
});

Route::get('edit_dosen', function () {
    return view('frontend.data_pendukung.edit_dosen');
});

Route::get('unsulan_baru', function () {
    return view('layout.penelitian.usulan_baru.index');
});

Route::get('perbaikan_usulan_dosen', function () {
    return view('layout.penelitian.perbaikan_usulan.index');
});

Route::get('laporan_kemajuan_dosen', function () {
    return view('layout.penelitian.laporan_kemajuan.index');
});

Route::get('laporan_akhir_dosen', function () {
    return view('layout.penelitian.laporan_akhir.index');
});

Route::get('catatan_harian_dosen', function () {
    return view('layout.penelitian.catatan_harian.index');
});

//PENGABDIAN

Route::get('usulan_baru', function () {
    return view('layout.penelitian.usulan_baru.index');
});

Route::get('perbaikan_usulan', function () {
    return view('layout.pengabdian.perbaikan_usulan.index');
});

Route::get('laporan_kemajuan', function () {
    return view('layout.pengabdian.laporan_kemajuan.index');
});

Route::get('laporan_akhir', function () {
    return view('layout.pengabdian.laporan_akhir.index');
});

Route::get('catatan_harian', function () {
    return view('layout.pengabdian.catatan_harian.index');
});



Route::get('admin/opt', [OptController::class, 'index']);
