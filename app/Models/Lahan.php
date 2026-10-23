<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lahan extends Model
{
    protected $table = 'lahan';

    protected $fillable = [
        'id_user',
        'nama_lahan',
        'alamat',
        'latitude',
        'longitude',
        'luas',
        'kondisi',
        'status_lahan',
        'deskripsi',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
