<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = [
        'id_user',
        'id_lahan',
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'tanggal_pengajuan',
        'status_pengajuan',
        'alasan_penolakan',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_pengajuan' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function lahan(): BelongsTo
    {
        return $this->belongsTo(Lahan::class, 'id_lahan');
    }
}
