<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas'; // Nama tabel
    protected $primaryKey = 'id_anggota'; // Primary key
    public $timestamps = true; // Aktifkan timestamps jika digunakan
    protected $fillable = ['nama', 'alamat', 'no_telp', 'tgl_lahir']; // Kolom yang boleh diisi
}
