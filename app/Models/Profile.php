<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'visi',
        'misi',  // Mengganti 'misi' dengan 'deskripsi'
        'jml_siswa',
        'jml_guru',
        'jml_staff',
        'file',     // Mengganti 'file' dengan 'gambar'
        'alamat',
        'kontak1',
        'kontak2',
        'email'
    ];
}
