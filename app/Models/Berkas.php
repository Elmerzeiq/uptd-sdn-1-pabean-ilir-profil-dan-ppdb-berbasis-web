<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas';
    protected $fillable = [
        'nama',
        'akta_kelahiran',
        'kartu_keluarga',
        'ktp_orangtua',
        'kia',
        'ijazah_tk_paud',
        'kip_kps_kks',
    ];

    // Relasi ke tabel siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
