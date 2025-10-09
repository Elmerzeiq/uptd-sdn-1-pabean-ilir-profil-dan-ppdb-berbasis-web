<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    protected $table = 'kalenders';
    protected $fillable = [
        'judul',
        'image',
        'deskripsi',
        'isi',
        'tanggal',
    ];
}
