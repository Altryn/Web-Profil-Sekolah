<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['title', 'excerpt', 'body'];
}
