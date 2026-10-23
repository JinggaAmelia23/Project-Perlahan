<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Verifikasi extends Model
{
    protected $table = 'verifikasi';

    protected $fillable = [
        'id_pengajuan',
        'id_petugas',
        'tanggal_verifikasi',
        'hasil_verifikasi',
        'catatan',
        'status_verifikasi',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_verifikasi' => 'datetime',
        ];
    }

    public function pengajuan(): BelongsTo
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan');
    }

    public function petugas(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_petugas');
    }
}
