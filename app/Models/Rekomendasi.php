?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rekomendasi extends Model
{
    protected $table = 'rekomendasi';

    protected $fillable = [
        'id_lahan',
        'jenis_pemanfaatan',
        'alasan',
        'keterangan',
    ];

    public function lahan(): BelongsTo
    {
        return $this->belongsTo(Lahan::class, 'id_lahan');
    }
}
