<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = ['nis', 'nama', 'kelas_asal', 'foto', 'tahun_lulus'];

    
}
