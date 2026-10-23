
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->restrictOnDelete();
            $table->string('nama_lahan');
            $table->text('alamat');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->decimal('luas', 12, 2)->nullable();
            $table->string('kondisi')->nullable();
            $table->string('status_lahan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lahan');
    }
};
