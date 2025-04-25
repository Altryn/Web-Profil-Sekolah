<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $fillable = [
        'judul', 
        'tanggal', 
        'desc', 
        'isi'
    ];
}
