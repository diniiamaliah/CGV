<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    use HasFactory;
    public function jamtayang()
    {
        return $this->belongsTo(seat::class);
    }
}
