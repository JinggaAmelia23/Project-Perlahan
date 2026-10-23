<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monitoring extends Model
{
    protected $table = 'monitoring';

    protected $fillable = [
        'id_pengajuan',
        'id_petugas',
        'tanggal_monitoring',
        'progres',
        'kondisi_kegiatan',
        'catatan',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_monitoring' => 'date',
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
