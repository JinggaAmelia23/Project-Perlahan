
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foto_lahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lahan')
                ->constrained('lahan')
                ->restrictOnDelete();
            $table->string('nama_file');
            $table->string('path_file');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('foto_lahan');
    }
};
