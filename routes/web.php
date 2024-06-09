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

//HAK AKSES OPT

Route::get('reguler', function () {
    return view('frontend.opt.usulan_reguler');
});

Route::get('perbaikan usulan', function () {
    return view('frontend.opt.perbaikan_usulan');
});

Route::get('catatan harian', function () {
    return view('frontend.opt.catatan_harian');
});

Route::get('laporan kemajuan', function () {
    return view('frontend.opt.laporan_kemajuan');
});

Route::get('laporan akhir', function () {
    return view('frontend.opt.laporan_akhir');
});

Route::get('profile lembaga', function () {
    return view('frontend.data_pendukung.profile_lembaga');
});

Route::get('cari akun', function () {
    return view('frontend.data_pendukung.cari_akun');
});

Route::get('singkronasi prodi', function () {
    return view('frontend.data_pendukung.singkronasi_prodi');
});

Route::get('singkronasi dosen', function () {
    return view('frontend.data_pendukung.singkronasi_dosen');
});



// HAK AKSES DOSEN


Route::get('edit_dosen', function () {
    return view('frontend.data_pendukung.edit_dosen');
});

Route::get('usulan_baru_dosen', function () {
    return view('layout.penelitian.usulan_baru');
});

Route::get('perbaikan_usulan_dosen', function () {
    return view('layout.penelitian.perbaikan_usulan');
});

Route::get('laporan_kemajuan_dosen', function () {
    return view('layout.penelitian.laporan_kemajuan');
});

Route::get('laporan_akhir_dosen', function () {
    return view('layout.penelitian.laporan_akhir');
});

Route::get('catatan_harian_dosen', function () {
    return view('layout.penelitian.catatan_harian');
});

Route::get('usulan_baru', function () {
    return view('layout.pengabdian.usulan_baru');
});

Route::get('perbaikan_usulan', function () {
    return view('layout.pengabdian.perbaikan_usulan');
});

Route::get('laporan_kemajuan', function () {
    return view('layout.pengabdian.laporan_kemajuan');
});

Route::get('laporan_akhir', function () {
    return view('layout.pengabdian.laporan_akhir');
});

Route::get('catatan_harian', function () {
    return view('layout.pengabdian.catatan_harian');
});



Route::get('admin/opt', [OptController::class, 'index']);
