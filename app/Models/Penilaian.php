<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'juri_id',
        'team_id',
        'kriteria_id',
        'score1',
        'score2',
        'score3',
        'score4',
        'score5',
    ];

    public function juri()
    {
        return $this->belongsTo(Juri::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
