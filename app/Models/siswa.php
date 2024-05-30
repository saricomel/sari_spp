<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class siswa extends Model
{
    use HasFactory;
    protected $fillable=['nama_siswa','kela_id','nis','jenis_kelamin','no_telpon','alamat'];

    public function kela():BelongsTo
    {
        return $this->belongsTo(Kela::class);
    }

    public function spp():HasMany
    {
        return $this->hasMany(spp::class);
    }
}