<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dosen\UsulanController;
use App\Http\Controllers\Dosen\DashboardController;



Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard',  'index');
});

Route::prefix('usulan')->group(function(){
    Route::controller(UsulanController::class)->group(function () {
        Route::get('/',  'index');
    });
});







Route::get('edit_dosen', function () {
    return view('frontend.data_pendukung.edit_dosen');
});





// Route::get('unsulan_baru', function () {
//     return view('layout.penelitian.usulan_baru.index');
// });

// Route::get('perbaikan_usulan_dosen', function () {
//     return view('layout.penelitian.perbaikan_usulan.index');
// });

// Route::get('laporan_kemajuan_dosen', function () {
//     return view('layout.penelitian.laporan_kemajuan.index');
// });

// Route::get('laporan_akhir_dosen', function () {
//     return view('layout.penelitian.laporan_akhir.index');
// });

// Route::get('catatan_harian_dosen', function () {
//     return view('layout.penelitian.catatan_harian.index');
// });

// //PENGABDIAN

// Route::get('usulan_baru', function () {
//     return view('layout.penelitian.usulan_baru.index');
// });

// Route::get('perbaikan_usulan', function () {
//     return view('layout.pengabdian.perbaikan_usulan.index');
// });

// Route::get('laporan_kemajuan', function () {
//     return view('layout.pengabdian.laporan_kemajuan.index');
// });

// Route::get('laporan_akhir', function () {
//     return view('layout.pengabdian.laporan_akhir.index');
// });

// Route::get('catatan_harian', function () {
//     return view('layout.pengabdian.catatan_harian.index');
// });
