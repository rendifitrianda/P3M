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
        Schema::create('pengabdian_perbaikan_usulan', function (Blueprint $table) {
            $table->id();
            $table->string('skema', 255);
            $table->string('judul', 255);
            $table->string('tahun_pelaksanaan', 255);
            $table->string('dana_disetujui', 255);
            $table->string('dokumen', 255);
            $table->string('status', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengabdian_perbaikan_usulan');
    }
};
