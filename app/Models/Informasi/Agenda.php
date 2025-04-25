<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['judul', 'desc', 'isi', 'tanggal_pelaksanaan'];
}
