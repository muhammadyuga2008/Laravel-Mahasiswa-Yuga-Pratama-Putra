<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calon_mahasiswa_id')->constrained('calon_mahasiswas');
            $table->string('nama_lengkap');
            $table->foreignId('fakultas_id')->constrained('fakultas');
            $table->string('nama_fakultas');
            $table->foreignId('program_studi_id')->constrained('program_studis');
            $table->string('nama_prodi');
            $table->enum('status_pembayaran',['pending','approved','reject']);
            $table->integer('total_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
