<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function komponens()
    {
        return $this->hasMany(Komponen::class);
    }
}
