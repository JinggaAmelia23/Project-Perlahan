<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FotoLahan extends Model
{
    protected $table = 'foto_lahan';

    protected $fillable = [
        'id_lahan',
        'nama_file',
        'path_file',
        'keterangan',
    ];

    public function lahan(): BelongsTo
    {
        return $this->belongsTo(Lahan::class, 'id_lahan');
    }
}
