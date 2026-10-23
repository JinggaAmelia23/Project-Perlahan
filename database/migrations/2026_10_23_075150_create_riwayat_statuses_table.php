
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengajuan')->constrained('pengajuan')->restrictOnDelete();
            $table->foreignId('id_user')->constrained('users')->restrictOnDelete();
            $table->string('status');
            $table->text('catatan')->nullable();
            $table->dateTime('tanggal_status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_status');
    }
};
