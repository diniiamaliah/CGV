<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jamtayang_seat extends Model
{
    use HasFactory;

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movies_id');
    }

    public function jamtayang()
    {
        return $this->belongsTo(Jamtayang::class, 'jam_id');
    }

}

