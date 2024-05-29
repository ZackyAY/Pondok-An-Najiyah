<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = [
        'tgl_daftar',
        'th_ajaran',
        'nm_peserta',
        'tmp_lahir',
        'tgl_lahir',
        'jk',
        'almt_peserta',
        'image',
    ];
    use HasFactory;
}
