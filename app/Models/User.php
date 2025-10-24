<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang boleh diisi secara mass-assignment.
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'status',
    ];

    /**
     * Kolom yang disembunyikan ketika model di-serialize.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Tipe data yang perlu di-casting otomatis.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Fungsi untuk mengambil semua data user dengan pagination.
     */
    public static function getRecord()
    {
        return self::select('users.*')
            ->orderBy('id', 'asc')
            ->paginate(10);
    }
}
