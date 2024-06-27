<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('nidn', 255);
            $table->string('klaster', 255); 
            $table->string('institusi', 255);
            $table->enum ('jenjang_pendidikan', ['S1', 'S2', 'S3']); 
            $table->enum ('program_studi', ['teknik_informasi', 'teknik_sipil', 'teknik_elektro', 'teknik_pertambangan', 'teknik_mesin', 'agro_industri', 'tptp', 'tphp',]);  
            $table->string('nomor_ktp', 255);
            $table->string('jabatan_akademik', 255);
            $table->string('alamat', 255); 
            $table->date('tanggal_lahir');  
            $table->string('tempat_lahir');  
            $table->string('nomor_hp', 25); 
            $table->string('alamat_surel', 255);
            $table->string('website_personal', 255); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
