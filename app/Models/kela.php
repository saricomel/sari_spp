<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kela extends Model
{
    use HasFactory;
    protected $fillable=['nama_kelas','kompetensi_keahlian'];

    public function siswas():HasMany
    {
        return $this->hasMany(siswa::class);
    }
}

