<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Dosen extends Authenticatable
{

    use HasFactory, Notifiable;
    protected $table = 'dosen';
    
    protected $fillable = [
        'nama',
        'nidn',
        'klaster',
        'institusi',
        'jenjang_pendidikan',
        'program_studi',
        'nomor_ktp',
        'jabatan_akademik',
        'alamat',
        'tanggal_lahir',
        'tempat_lahir',
        'nomor_hp',
        'alamat_surel',
        'website_personal',
    ];

    static $rule = [
        'nama' => "required",
        'nidn' => "required",
        'klaster' => "required",
        'institusi' => "required",
        'jenjang_pendidikan' => "required",
        'program_studi' => "required",
        'nomor_ktp' => "required",
        'jabatan_akademik' => "required",
        'alamat' => "required",
        'tanggal_lahir' => "required",
        'tempat_lahir' => "required",
        'nomor_hp' => "required",
        'alamat_surel' => "required",
        'website_personal' => "required",
    ];
    static $isi = [
        'nama.required' => "Inputan tidak boleh kosong !",
        'nidn.required' => "Inputan tidak boleh kosong !",
        'klaster.required' => "Inputan tidak boleh kosong !",
        'institusi.required' => "Inputan tidak boleh kosong !",
        'jenjang_pendidikan.required' => "Inputan tidak boleh kosong !",
        'program_studi.required' => "Inputan tidak boleh kosong !",
        'nomor_ktp.required' => "Inputan tidak boleh kosong !",
        'jabatan_akademik.required' => "Inputan tidak boleh kosong !",
        'alamat.required' => "Inputan tidak boleh kosong !",
        'tanggal_lahir.required' => "Inputan tidak boleh kosong !",
        'tempat_lahir.required' => "Inputan tidak boleh kosong !",
        'nomor_hp.required' => "Inputan tidak boleh kosong !",
        'alamat_surel.required' => "Inputan tidak boleh kosong !",
        'website_personal.required' => "Inputan tidak boleh kosong !",
    ];
    



}
    
