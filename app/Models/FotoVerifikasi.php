<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FotoVerifikasi extends Model
{
    protected $table = 'foto_verifikasi';

    protected $fillable = [
        'id_verifikasi',
        'nama_file',
        'path_file',
        'keterangan',
    ];

    public function verifikasi(): BelongsTo
    {
        return $this->belongsTo(Verifikasi::class, 'id_verifikasi');
    }
}
