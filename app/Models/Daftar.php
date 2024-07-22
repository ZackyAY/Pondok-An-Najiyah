<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $table = 'daftars';

    protected $fillable = [
        'th_ajaran', 
        'tgl_daftar', 
        'nm_peserta', 
        'jk', 
        'tmp_lahir', 
        'tgl_lahir', 
        'almt_peserta', 
        'image'
    ];
}
