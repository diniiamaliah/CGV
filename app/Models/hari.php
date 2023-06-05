<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hari extends Model
{
    use HasFactory;
    protected $table='haris';
    protected $fillable=['id','title'];
    public function movie()
    {
        return $this->hasMany(movie::class);
    }
}
