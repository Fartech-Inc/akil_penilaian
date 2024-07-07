<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'total_score', 'category'];

    public function penilaians()
    {
        return $this->hasMany(Penilaian::class);
    }
}
