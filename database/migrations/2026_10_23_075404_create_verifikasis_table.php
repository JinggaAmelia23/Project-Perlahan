
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengajuan')->constrained('pengajuan')->restrictOnDelete();
            $table->foreignId('id_petugas')->constrained('users')->restrictOnDelete();
            $table->dateTime('tanggal_verifikasi')->nullable();
            $table->string('hasil_verifikasi')->nullable();
            $table->text('catatan')->nullable();
            $table->string('status_verifikasi')->default('menunggu');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verifikasi');
    }
};
