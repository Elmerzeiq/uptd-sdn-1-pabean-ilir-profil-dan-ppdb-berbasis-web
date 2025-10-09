<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    protected $table = 'profils';
    protected $fillable = [
        'visi',
        'misi',
        'jml_siswa',
        'jml_guru',
        'jml_staff',
        'image',
        'alamat',
        'kontak1',
        'kontak2',
        'email',
    ];
}
