<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan_movie extends Model
{
    use HasFactory;

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }
    public function movie()
    {
        return $this->belongsTo(movie::class);
    }
    public function seat()
    {
        return $this->belongsTo(seat::class);
    }
}
