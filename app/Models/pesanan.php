<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
    public function pesananmovies()
    {
        return $this->hasMany(pesanan_movie::class, 'id');
    }
}
