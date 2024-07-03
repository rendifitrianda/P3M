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
        Schema::create('penelitian_usulan_baru', function (Blueprint $table) {
            $table->id();
            $table->string('ketua', 255); 
            $table->string('judul', 255); 
            $table->string ('bidang_fokus', 255); 
            $table->string ('institusi', 255);  
            $table->string('tahun_pelaksanaan', 255);
            $table->string('peran', 255);
            $table->string('status_usulan', 255); 
            $table->string('hasil_penilaian', 255);  
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penelitian_usulan_baru');
    }
};
