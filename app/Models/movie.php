<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $table='movies';
    protected $fillable = [
       'id','hari_id','jam_id','harga','judul', 'sinopsis', 'image', 'durasi','linktrailer'
    ];

    public function hari()
    {
        return $this->belongsTo(Hari::class);
    }

    public function seat()
    {
        return $this->belongsToMany(seat::class, 'jamtayang_seat', 'movies_id', 'seat_id');
    }
    public function jamtayangSeat()
    {
        return $this->hasMany(JamtayangSeat::class, 'movies_id');
    }
    public function jamTayang()
{
    return $this->belongsTo(JamTayang::class, 'jam_id');
}

    public function pesanan_movies()
    {
        return $this->hasMany(pesanan_movies::class);
    }
    

}
