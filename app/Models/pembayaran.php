<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'spp_id',
        'tanggal_pembayaran',
        'jumblah_pembayaran'
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke model Spp
    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
