<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul_detail extends Model
{

    use HasFactory;
    protected $table = 'ekskul_details';
    protected $fillable = [
        'image',
        'kategori',
    ];
}
