<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jamtayang extends Model
{
    use HasFactory;
    protected $table='jamtayangs';
    protected $fillable=['id','jamtayang'];
    public function seat()
    {
        return $this->hasMany(seat::class);
    }

    public function movie()
    {
        return $this->belongsTo(movie::class);
    }
    public function jamtayang_Seat()
    {
        return $this->hasMany(jamtayang_seat::class,'jam_id');
    }
    


}
