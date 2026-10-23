
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monitoring', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengajuan')
                ->constrained('pengajuan')
                ->restrictOnDelete();
            $table->foreignId('id_petugas')
                ->constrained('users')
                ->restrictOnDelete();
            $table->date('tanggal_monitoring');
            $table->text('progres')->nullable();
            $table->string('kondisi_kegiatan')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monitoring');
    }
};
