<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class spp extends Model
{
    use HasFactory;

    protected $fillable=['siswa_id','bulan','tahun','jumblah_spp'];

    public function siswa():BelongsTo
    {
        return $this->belongsTo(siswa::class);
    }

    public function pembayaran():HasMany
    {
        return $this->hasMany(pembayaran::class);
    }
}
