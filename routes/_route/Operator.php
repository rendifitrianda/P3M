

<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Operator\OptController;
use App\Http\Controllers\Operator\DosenController;
use App\Http\Controllers\Operator\UsulanController;
use App\Http\Controllers\Operator\RegularController;
use App\Http\Controllers\Operator\DashboardController;
use App\Http\Controllers\Operator\LaporanAkhirController;
use App\Http\Controllers\Operator\CatatanHarianController;
use App\Http\Controllers\Operator\LaporanKemajuanController; 


//TAMBAH DOSEN
Route::prefix('dosen')->group(function(){
    Route::controller(DosenController::class)->group(function () {
        Route::get('/',  'index');
        Route::get('/',  'create');
        Route::post('/',  'store');
    });
});



Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard',  'index');
});

// Operator Regular
Route::prefix('reguler')->group(function(){
    Route::controller(RegularController::class)->group(function () {
        Route::get('/',  'index');
    });
});
// Operator Regular
Route::prefix('usulan')->group(function(){
    Route::controller(UsulanController::class)->group(function () {
        Route::get('/',  'index');
    });
});
// Operator Regular
Route::prefix('laporan_kemajuan')->group(function(){
    Route::controller(LaporanKemajuanController::class)->group(function () {
        Route::get('/',  'index');
    });
});
// Operator Regular
Route::prefix('laporan_akhir')->group(function(){
    Route::controller(LaporanAkhirController::class)->group(function () {
        Route::get('/',  'index');
    });
});

Route::prefix('catatan_harian')->group(function(){
    Route::controller(CatatanHarianController::class)->group(function () {
        Route::get('/',  'index');
    });
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