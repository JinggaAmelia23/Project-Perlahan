
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rekomendasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lahan')
                ->constrained('lahan')
                ->restrictOnDelete();
            $table->string('jenis_pemanfaatan');
            $table->text('alasan');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekomendasi');
    }
};

