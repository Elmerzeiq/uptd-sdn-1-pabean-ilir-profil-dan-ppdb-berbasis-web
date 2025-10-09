<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $table = 'akademiks';
    protected $fillable = [
        'judul',
        'isi',
        'image'
    ];
}
