
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foto_verifikasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_verifikasi')
                ->constrained('verifikasi')
                ->restrictOnDelete();
            $table->string('nama_file');
            $table->string('path_file');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('foto_verifikasi');
    }
};
