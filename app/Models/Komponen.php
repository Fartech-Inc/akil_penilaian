<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    use HasFactory;

    protected $fillable = ['kriteria_id', 'name', 'score'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
